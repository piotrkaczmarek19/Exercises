#!/usr/bin/python
from __future__ import division
from pythonds import *
# Find median of two sorted arrays in O(lg n) time; arrays can be of different sizes.
def M02(a, b):

def M03(a, b, c):

def M04(a, b, c, d):

def medianSingle(arr, n):

# Inputs : A (first array), N (length first array), B (second array), M (length second array)
# Output : integer (median)
def findMedianUtil(A, N, B, M):
		# Case 1 : A & B have only one el

		# Case 2 : larger array (B) has odd number of els. We consider middle three els of array B
		# and the only element of smaller array

		# Case 3 : larget array (B) has even number of els. Median will be either 
		# one of middle two els of array or single el from array A


		# Case 1 :  Both arrays have two els

		# Case 2 : Bigger Array (B) has an odd number of els. median can be either
		# Middle el of larger array
		# Max of first el of A and el just before middle of array B
		# Min of second el of A and el right after middle of array B
			# arrays are sorted, so we only compare max of A[0] and B[M/2 - 1] without A[1] or B[M/2 + 1]
		# Case 3 : Bigger Array B has an even number of els.

	# if A[idxA] <= B[idxB], then median must exist in A[idxA...] or B[...idxB]

	# Else, median must exist in A[...idxA] or B[idxB...]

def findMedian(A, N, B, M):

# Apple stock prices
stockPricesYesterday = [490,495,500,504,550,502,499]

def bestProfit(stockPricesYesterday):
	# pointer can only move in one direction --> solvable in O(n) time

		# Checking best buy -- if current stock is cheaper than previous cheapest, it becomes the cheapest
		# Checking best sale -- If current (stock - cheapest) < best profit


# Balanced binary tree
# a tree is superbalanced if the difference between the depths of any two leaf nodes is no greater than one
# Here recursive approach (if left tree is balanced then right tree is balanced) does not work here
# if n leaves, n^2 possible pairs of leaves, have to compare each pair of leaves
class Stack2:
     def __init__(self):
         self.items = []

     def isEmpty(self):
         return self.items == []

     def push(self, item):
         self.items.append(item)

     def pop(self):
         return self.items.pop()

     def peek(self):
         return self.items[len(self.items)-1]

     def size(self):
         return len(self.items)

tree_root = [1, 2, 3, 5]
def is_balanced(tree_root):
		# pop a node and its depth from the top of the stack

		# Case: we found a leaf
			# we only care if it's a new leaf:

				# two ways we right now have an unbalanced tree:
				# 1) more than 2 different leaf depths
				# 2) 2 leaf depths that are more than 1 apart

		# Case : this isn't a leaf -- keep stepping down

# Binary Search tree checker
# Check if binary tree is a valid binary search tree
# Each node has to be in the correct position relative to all its ancestors.

MIN_INT = 0
MAX_INT = 9999
def bst_checker(root):
	# Start at root, with an arbitrarily low lower bound
	# and higher upper bound

	# DFS:
			# this node must be less than the current node 
			# this node must be greater than current node 


	# if none of the nodes were invalid, return true 



# Recursive version
def bst_valid_recursive(root, lower_bound = MIN_INT, upper_bound = MAX_INT):

# Bracket Validator
openers_to_closers_map = {
'(':')',
'{':'}',
'[':']'
}


#openers = openers_to_closers_map.keys()
#closers = openers_to_closers_map.value()

def is_valid(code):
			# if there are no openers in the stack
				# if this closer doesn't correspond to the most recently
				# seen unclosed opener, break

# Fibonacci number calculator
def fibonacci_recursive(n):
		# divide
		# conquer



class Fibber:
	def __init__(self):
		self.memo = {}

	def fib(self, n):
		if n < 0:
			raise Exception("Index was negative.")

		elif n in [0, 1]:
			return n

		if self.memo.has_key(n):
			return self.meme[n]

		result = self.fib(n - 1) + self.fib(n - 1)

		self.memo[n] = result

		return result

# Does linked list have a cycle? 
def check_cycle(first_node):

# Find rotation point 
# a rotated array: [x, y ,z, a, b, c]
# a rotated array is partially sorted
# => adapted binary search
# rotation point is to the right if current element is greater than first element (we are still in the first sorted subarray)

def find_rot(array):
	# still in first subarray, rotation is to the right

array = [4, 5, 6, 1, 2, 3, 4]
print find_rot(array)

# Highest product of 3
# given array of ints, find 3 ints that produces the highest product you can get

def highest_product_three(array):
		# each iteration we check current value not individually, but based on whether it increases the total highest prod of 3 or not
		# now we check whether or not to update the highest product of two

		# Now we store the  highest and lowest numbers so far		

	# highest is used in highest_prod_of_2, highest_prod_of_2 is used in highest_prod_of_3. 
	# We work incrementally

# Inflight entertainement
# Choose two movies whose total runtimes will equal the exact flight length
# args: flight_length (min) and returns boolean whheter there are two numbers in flight_movies that sum equal flight_length
# within a margin of 20 min
# Needs working on
def find_two_movies(flight_dur, array):


# IN place shuffle
# we want to shuffle an array randomly while using only O(1) space
def shuffle(array):

	# xrange doens't exist anymore in python 3

# Kth to the last node in a singly-linked list
def kth_to_last(k, head):


# Parenthesis matching
# given a sentance with parentheses, along with the opening position of a parenthesis, find the corresponding closing one
def parenthesis_matcher(astring, parenthesis_pos):

print parenthesis_matcher(astring, 5)

# Product of all other numbers in the array except current replace current
def get_products_of_all_ints_except_at_index(alist):
	# Plugging product of numbers before the index

	# Plugging product of numbers after the index

# Recursive string permutations
# Given a string, return all possible permutations in an array 
def find_all_possible_permutations(astring):

def reverse(head):

	# until we have fallen off the end of the list 
		# copy a pointer to the next element
		# before we overwrite current.next 

		# reverse the 'next' pointer 

		# step forward in the list 

# reverse array of chars in place in place
# In Python, it is not possible to reverse string in place, because strings are immutable
def reverse_string_in_place(array,start, end):


array = ["a", "b", "c", "d", "e"]


# Reverse words
def reverse_words(astring):
	# Converting string to list so we can work on it
	l = len(astring)
	array = [""] * l 
	
	for i in range(l):
		array[i] = astring[i]

	# Doing the actual work
	# first, we reverse the whole string
	reverse_string_in_place(array,0, l - 1)
	current_word_start_index = 0
	current_word_end_index = 0
	for i in range(l):
		if array[i] == " ": 
			reverse_string_in_place(array, current_word_start_index, i - 1)
			current_word_start_index = i + 1
		if i == l - 1:
			reverse_string_in_place(array, current_word_start_index, i)
	return array

print reverse_words("end of line") 

def rand7():

# Array with duplicate IDs and one single id. Find the single ID
# Do it in O(n) time and O(1) space

def find_non_duplicate(array):


array = [123, 456, 789, 456, 123, 789, 654, 654, 987, 321, 987]


# Sorting an array in O(n) time and space

def counting_sort(unsorted_scores, max_score):

array = [552, 666, 888, 111, 333, 444, 444, 666, 789, 32, 556, 121, 999]

print counting_sort(array, 999)

# Find the highest floor (100 floors) an egg can be dropped without breaking
# You have two eggs
# Do as few drops as possible
# Do better than a binary approach
# Worst case running time: 14 drops
# Drop first egg first 14 times, then decrease by one floor until hit 99