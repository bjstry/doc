#!/bin/bash
if [ -f ~/.bash_profile ];
then
  . ~/.bash_profile
fi
/sbin/dump -$1u -f /data/backup/sda2-`date +%Y%m%d%H%M%S`.dump.$1 /mnt &
