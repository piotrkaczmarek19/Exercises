# -*- Coding: utf-8 -*-

from __future__ import generators
import random
import math
import copy
import time
from itertools import groupby
from collections import defaultdict
import heapq

# O(n * log(n)) time
def mergeSort(arr, *args):

	# Recursive calls on both halves of array

	# Conquer step: sorting both halves of the array against each other

	# Inserting remaining elements from either left half or right half

arr = [1,9,8,6,5,7,4,3,2]
print mergeSort(arr)

def countInversion(arr, count):

arr = []
with open('IntegerArray.txt', 'r') as f:
	for line in f:
		arr.append(int(line))

#print countInversion(arr, 0)

# Closest pair - return Px, Py - O(n * log(n)) running time
# Sort recursively by y-coordinate
# 
# David Eppstein, UC Irvine, 7 Mar 2002
def closestPair(L):
	def sqdist(p, q): 

	def testPair(p, q):
		# test distance between pair against distance of current best pair

	def merge(A, B):
		# While both our parts still have unvisited elements

		# if there are points left in A but not in B or if y-coordinate of point in A is smaller than the one in B

		# If there are points left in B but not in A or if y-coordinate in B is smaller than the one in A

	def recur(L):

		# Split the plane in 2 equal parts

		# x-coordinate of split point

		# merge and sort 

		# define array of possible candidates around split line

		# test the array for points inside the delta zone


print(closestPair([(0,0),(7,6),(2,20),(12,5),(16,16),(5,8),(19,7),(14,22),(8,19),(7,29),(10,11),(1,13)]))

# Karger Min cut 
def fileRead(afile):
	fileData = open(afile, "r")
	G = {}
	for line in fileData:
		ind = [int(i) for i in line.split()]
		G[ind[0]] = ind[1:]
	return G

def chooseEdge(G):
	# Choose first node

	#Choose randomly second node that is connected to the first

def karger(G):
	# Merge nodes until there are two left

		# Randomly choose edge

		# make u connected to the nodes that were connected to v

		# remove connectivity to v from said nodes - replace with connectivity to u

		# remove u from edge list to remove self loops

		# remove traces of v

	# Return number of edges between two remaining nodes

def main(afile, n):
	G = fileRead(afile)
	minCut = float("inf")
	for i in range(0,n):
		newG = copy.deepcopy(G)
		cut = karger(newG)
		if int(cut) < minCut:
			minCut = cut
	return minCut

print main("kargerMinCut.txt", 1000)

# Quick Select for ith order of statistic
def partition(A, p_index):
	# Swapping pivot with last element

	# If elements are smaller than the pivot, move them to the beginning of the array

	# replace pivot from last position in array to its correct position and return index of pivot

def quickSelect(alist, ith):
	# Choosing pivot at random 

	# partitioning main array 

	# Choosing appropriate recursion depending on where the pivot is compared to wanted order of statistic

alist = [2,5,0,3,8,99999999]

print(quickSelect(alist, 6))
print(alist)

# Running Median - having a stream of integers, we want to keep track of the medians of the output sequence
# as new integers are churn out. Every time a new int comes out, we put it either in heap_min if it is smaller
# than min heap_max, or vice versa. After that operation, the median is the max of heap_lo (the max is heap_lo[0] as we are inserting -y with each iteration)
def readFile(afile, stream):
	with open(afile) as f:
		lines = f.readlines()
		f.close
		lines = [int(line) for line in lines]

		for line in lines:
			stream.append(line)


def running_median(stream):
	# Initialize low heap

		# If new int is bigger than current median, push in hepa_hi

			# Balancing heap_lo and heap_hi

		# if new int is smaller than current median, push in heap_lo

		# appending maximum of heap_lo to medians array

