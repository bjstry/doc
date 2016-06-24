#!/bin/bash
#####自动安装打包系统脚本#####
###example  ./js-install-dbxt.sh /dev/sda 32G /data2/OS6.4/centos6.4-boot.tar.bz2 /data2/OS6.4/centos6.4-root.tar.bz2 ###
###说明 脚本后面跟四个参数，第一个为要安装到的硬盘，第二个为虚拟内存大小，第三个为boot包绝对路径，第四个为root包绝对路径###
disk=$1
smem=$2
###参数设置 预留windows分区大小，带单位，默认200G###
winfq="200G"
###参数设置 boot分区大小,默认256M###
bootfq="256M"
###参数设置 root分区大小,默认200G###
rootfq="200G"
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
