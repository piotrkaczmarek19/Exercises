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
	if len(arr) == 1:
		return arr

	# Recursive calls on both halves of array
	m = len(arr) // 2

	left = arr[:m]
	right = arr[m:]

	mergeSort(left)
	mergeSort(right)

	# Conquer step: sorting both halves of the array against each other
	i = 0
	j = 0
	k = 0
	while (i < len(left)) and (j < len(right)):
		if (left[i] < right[j]):
			arr[k] = left[i]
			i+=1
		elif (left[i] > right[j]):
			arr[k] = right[j]
			j+=1
		k+=1

	# Inserting remaining elements from either left half or right half
	while (i < len(left)):
		arr[k] = left[i]
		k+=1
		i+=1
	while (j < len(right)):
		arr[k] = right[j]
		k+=1
		j+=1

	return arr

arr = [1,9,8,6,5,7,4,3,2]
print mergeSort(arr)

def countInversion(arr, count):
	if len(arr) == 1:
		return arr

	m = len(arr) // 2

	left = arr[:m]
	right = arr[m:]

	countInversion(left, count)
	countInversion(right, count)

	i = 0
	j = 0
	k = 0
	while (i < len(left)) and (j < len(right)):
		if (left[i] < right[j]):
			arr[k] = left[i]
			i+=1
		elif (left[i] > right[j]):
			arr[k] = right[j]
			j+=1
			# Increment inversion if left side array has bigger element than right side
			count += 1
		k+=1

	while (i < len(left)):
		arr[k] = left[i]
		k+=1
		i+=1
	while (j < len(right)):
		arr[k] = right[j]
		k+=1
		j+=1

	return arr, count
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
	def sqdist(p, q): return (p[0] - q[0])**2 + (p[1] - q[1])**2

	best = [sqdist(L[0], L[1]), (L[0], L[1])]

	def testPair(p, q):
		d = sqdist(p, q)
		if d < best[0]:
			best[0] = d 
			best[1] = p, q

	def merge(A, B):
		i = 0
		j = 0
		# While both our parts still have unvisited elements
		while i < len(A) or j < len(B):
			# if there are points left in A but not in B or if y-coordinate of point in A is smaller than the one in B
			if j >= len(B) or (i < len(A) and A[i][1] <= B[j][1]):
				yield A[i]
				i += 1
			# If there are points left in B but not in A or if y-coordinate in B is smaller than the one in A
			else:
				yield B[j]
				j += 1

	def recur(L):
		if len(L) < 2:
			return L 
		# Split the plane in 2 equal parts
		split = len(L) // 2
		# x-coordinate of split point
		splitx = L[split][0]
		# merge and sort 
		L = list(merge(recur(L[:split]), recur(L[split:])))

		# define possible candidates around split line
		E = [p for p in L if abs(p[0] - splitx) < best[0]]
		# test for points inside the delta zone
		for i in range(len(E)):
			for j in range(1,8):
				if i+j < len(E):
					testPair(E[i], E[i + j])
		return L 

	recur(L)
	print L
	return best[1]

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
	u = random.choice(list(G.keys()))
	#Choose randomly second node that is connected to the first
	v = random.choice(list(G[u]))
	return u, v

def karger(G):
	length = []
	# Merge nodes until there are two left
	while len(G) > 2:
		# Randomly choose edge
		u, v  = chooseEdge(G)
		# make u connected to the nodes that were connected to v
		G[u].extend(G[v])
		# remove connectivity to v from said nodes - replace with connectivity to u
		for x in G[v]:
			G[x].remove(v)
			G[x].append(u)
		# remove u from edge list to remove self loops
		while u in G[u]:
			G[u].remove(u)
		# remove traces of v
		del(G[v])

	# Return number of edges between two remaining nodes
	for key in G.keys():
		length.append(len(G[key]))
	return length[0]

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

# Quick Select
def partition(A, p_index):
	# Swapping pivot with last element 
	pivot = A[p_index]
	A[p_index], A[-1] = A[-1], A[p_index]

	i = -1
	# If elements are smaller than the pivot, move them to the beginning of the array
	for j in range(0, len(A)):
		if A[j] < pivot:
			A[j], A[i + 1] = A[i + 1], A[j]
			i += 1
	# replace pivot from last position in array to its correct position and return index of pivot
	A[i + 1], A[-1] = A[-1], A[i+1]
	return i + 1

def quickSelect(alist, ith):
	if len(alist) < 2:
		return alist[0]

	# Choosing pivot at random 
	p_index = random.randint(0, len(alist) - 1)
	# partitioning main array 
	p_index = partition(alist, p_index)
	# Choosing appropriate recursion depending on where the pivot is compared to wanted order of statistic
	if p_index == ith - 1:
		return alist[p_index]
	elif p_index > ith:
		return quickSelect(alist[:p_index], ith)
	else: 
		return quickSelect(alist[p_index+1:], ith - p_index - 1)


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
	heap_lo, heap_hi = [], []
	y = 0
	total = len(stream)
	medians = []

	# Initialize low heap
	if len(heap_lo) == 0:
		heapq.heappush(heap_lo, -y)
		m = -heap_lo[0]

	while stream:
		y = stream.pop()
		if len(heap_lo) == 0:
			heapq.heappush(heap_lo, -y)
		m = -heap_lo[0]

		# If new int is bigger than current median, push in hepa_hi
		if y > m :
			heapq.heappush(heap_hi, y)
			# Balancing heap_lo and heap_hi
			if len(heap_hi) > len(heap_lo):
				x = heapq.heappop(heap_hi)
				heapq.heappush(heap_lo, -x)
		# if new int is smaller than current median, push in heap_lo
		else:
			heapq.heappush(heap_lo, -y)
			if len(heap_lo) > len(heap_hi):
				x = heapq.heappop(heap_lo)
				heapq.heappush(heap_lo, -x)
		# appending maximum of heap_lo to medians array
		medians.append(-heap_lo[0])

