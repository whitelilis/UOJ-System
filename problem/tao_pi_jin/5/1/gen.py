#!/usr/bin/env python
import math
import random
import sys

r = random.random() * 3

edge = int(sys.argv[1])
l = 48
one = 2 * math.pi / edge

print '%.2f %d' % (r, edge)

for i in range(edge):
	print '%f %f' % (l * math.cos( i * one), l * math.sin(i * one))
