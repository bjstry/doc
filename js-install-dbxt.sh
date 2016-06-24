#!/bin/bash
disk=$1
smem=$2
winfq="20M"
bootfq="200M"
rootfq="5G"
swapfq=$2
bootfile=$3
rootfile=$4
if [ -b $disk ]
then
	echo $disk
	fdisk=$disk
	boot=$fdisk"2"
	root=$fdisk"3"
	mboot=/mnt/boot
	mroot=/mnt/root
	swap=$fdisk"5"
	fdisk $fdisk <<EOF
d
1
d
2
d
3
d
4
d

n
p
1
1
+$winfq
n
p
2

+$bootfq
n
p
3

+$rootfq
n
e


n

+$swapfq
t
5
82

w
EOF
	mkfs.ext4 $boot
	mkfs.ext4 $root
	mkswap -L SWAP $swap
	e2label $boot BOOT
	e2label $root ROOT
	mkdir $mboot && mount $boot $mboot
	mkdir $mroot && mount $root $mroot
	tar xvf $bootfile -C $mboot
	tar xvf $rootfile -C $mroot
	grub << EOF2
root (hd0,1)
setup (hd0)
quit
EOF2
	umount $mboot && rm -rf $mboot
	umount $mroot && rm -rf $mroot
	echo 'everything is ok.'
else
	echo "no device $disk !"
fi
