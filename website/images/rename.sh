#!/bin/sh

for i in *.mp3 ; do
	mv "$i" "$(echo "$i" | sed -r 's/-//')" ;
done
