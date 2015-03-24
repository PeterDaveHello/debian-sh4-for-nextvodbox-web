#!/bin/bash -x

REPO="dists/wheezy/all/binary-sh4"
scp "root@192.168.1.104:/media/Linux_Mint_17_MATE_32-bit/mini-repo/*.deb" $REPO/
dpkg-scanpackages ${REPO} > ${REPO}/Packages \
&& bzip2 -zkfv9 ${REPO}/Packages \
&& gzip -fv9 ${REPO}/Packages
