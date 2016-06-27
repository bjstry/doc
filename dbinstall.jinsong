#!/bin/bash
#####自动安装打包系统脚本#####
###example  ./js-install-dbxt.sh /dev/sda 32G /data2/OS6.4/centos6.4-boot.tar.bz2 /data2/OS6.4/centos6.4-root.tar.bz2 ###
###说明 脚本后面跟四个参数，第一个为要安装到的硬盘，第二个为虚拟内存大小，第三个为boot包绝对路径，第四个为root包绝对路径###
if [ $1 = "--help" ];then
    echo "js打包系统自动安装程序 使用说明"
    echo ""
    echo '用法: dbinstall [虚拟内存] [boot包绝对路径] [root包绝对路径] [安装盘(/dev/sda)] [预留windows分区(200G)] [boot分区(256M)] [root分区(200G)] ...'
    echo ''
    echo '示例1: dbinstall 32G /boot/boot.tar.bz2 /root/root.tar.bz2  //默认选用/dev/sda win预留200G boot大小256M root大小200G'
    echo '示例2: dbinstall 32G /boot/boot.tar.bz2 /root/root.tar.bz2 /dev/sda 100G 256M 200G'
    echo '自动安装打包系统'
    echo ''
    echo '-----------------------------------------'
    echo '--help                       获取帮助信息'
    echo '--version                    获取版本信息'
    echo ''
    echo '请向bjstry@163.com报告错误'
    echo '作者bjstry 版本1.0'
    exit
elif [ $1 = "--version" ];then
    echo '版本1.0'
    exit
fi
swapfq=$1
bootfile=$2
rootfile=$3
if [[ $4 = "" ]];then
    disk="/dev/sdz"
else
    disk=$4
fi
smem=$1
###参数设置 预留windows分区大小，带单位，默认200G###
if [[ $5 = "" ]];then
    winfq="200G"
else
    winfq=$5
fi
###参数设置 boot分区大小,默认256M###
if [[ $6 = "" ]];then
    bootfq="256M"
else
    bootfq=$6
fi
###参数设置 root分区大小,默认200G###
if [[ $7 = "" ]];then
    rootfq="200G"
else
    rootfq=$7
fi
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
