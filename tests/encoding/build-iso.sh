#! /bin/sh

iso=iso8859-15
if [ -e $iso ] ; then
	rm -rf $iso
fi
cp -a utf8 $iso
convmv -t ISO-8859-15 --notest -f UTF-8 -r $iso
