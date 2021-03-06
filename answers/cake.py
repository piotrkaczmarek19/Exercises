#!/usr/bin/python
from __future__ import division
from pythonds import *

# http://www.geeksforgeeks.org/median-of-two-sorted-arrays-of-different-sizes/
# Find median of two sorted arrays in O(lg n) time; arrays can be of different sizes.
def M02(a, b):
	return (a + b) / 2.0

def M03(a, b, c):
	return a + b + c - max(a, b, c) - min(a, b, c)

def M04(a, b, c, d):
	return (a + b + c + d - max(a, b, c, d) - min(a, b, c, d)) / 2.0

def medianSingle(arr, n):
	if n == 0:
		return -1
	if n%2 == 0:
		return (arr[n/2] + arr[n/2 - 1]) / 2
	return arr[n/2]
# Inputs : A (first array), N (length first array), B (second array), M (length second array)
# Output : integer (median)
def findMedianUtil(A, N, B, M):
	if N == 0:
		return medianSingle(B, M)

	elif N == 1:
		# Case 1 : A & B have only one el
		if M == 1:
			return M02(A[0], B[0])
		# Case 2 : larger array (B) has odd number of els. We consider middle three els of array B
		# and the only element of smaller array
		if M & 1:
			return M02( B[M//2], M03(A[0], B[M//2 - 1], B[M//2 + 1]) )
		# Case 3 : larget array (B) has even number of els. Median will be either 
		# one of middle two els of array or single el from array A
		return M03( B[M/2], B[M/2 - 1], A[0])

	elif N == 2:
		# Case 1 :  Both arrays have two els
		if M == 2:
			return M04(A[0], A[1], B[0], B[1])
		# Case 2 : Bigger Array (B) has an odd number of els. median can be either
		# Middle el of larger array
		# Max of first el of A and el just before middle of array B
		# Min of second el of A and el right after middle of array B
		if M & 1:
			return M03( B[M//2], max(A[0], B[M//2 - 1]), min(A[1], B[M//2 + 1]) ) # arrays are sorted, so we only compare max of A[0] and B[M/2 - 1] without A[1] or B[M/2 + 1]
		# Case 3 : Bigger Array B has an even number of els.
		return M04( B[M/2], B[M/2 - 1], max(A[0], B[M/2 - 2]), min(A[1], B[M/2 + 1]) )

	idxA = (N - 1) // 2
	idxB = (M - 1) // 2

	# if A[idxA] <= B[idxB], then median must exist in A[idxA...] or B[...idxB]
	if A[idxA] <= B[idxB]:
		return findMedianUtil(A[idxA:], N - idxA, B, M//2 + 1)
	# Else, median must exist in A[...idxA] or B[idxB...]
	return findMedianUtil(A, N//2 + 1, B[idxB:], M - idxB)

def findMedian(A, N, B, M):
	# Finding out which array is the largest for the recursion
	if N > M:
		return findMedianUtil(B, M, A, N)

	return findMedianUtil(A, N, B, M)

A = [900]
B = [5, 8, 10, 20]

N = len(A)
M = len(B)

print(findMedian(A, N, B, M)) # Expected output: 10

# Apple stock prices
stockPricesYesterday = [490,495,500,504,550,502,499]

def bestProfit(stockPricesYesterday):
	# pointer can only move in one direction --> solvable in O(n) time
	cheapest_stock = stockPricesYesterday[0]
	best_profit = 0

	i = 1
	while i < len(stockPricesYesterday):
		# Checking best buy -- if current stock is cheaper than previous cheapest, it becomes the cheapest
		if stockPricesYesterday[i] < cheapest_stock:
			cheapest_stock = stockPricesYesterday[i]
		
		# Checking best sale -- If current (stock - cheapest) < best profit
		profit = stockPricesYesterday[i] - cheapest_stock
		if profit > best_profit:
			best_profit = profit
		i += 1
	return best_profit

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
	depths = []

	nodes = Stack()
	nodes.push((tree_root, 0))

	while (not nodes.isEmpty()):
		# pop a node and its depth from the top of the stack
		node, depth = nodes.pop()

		# Case: we found a leaf
		if (not node.left) and not (node.right):

			# we only care if it's a new leaf:
			if depth not in depths:
				depths.append(depth)

				# two ways we right now have an unbalanced tree:
				# 1) more than 2 different leaf depths
				# 2) 2 leaf depths that are more than 1 apart
				if (len(depths) > 2) or (len(depths) == 2 and abs(depths[0] - depths[1]) > 1):
					return false
		# Case : this isn't a leaf -- keep stepping down
		else:
			if node.left:
				nodes.push((node.left, depth+1))
			if node.right:
				nodes.push((node.right, depth+1))
	return True

# Binary tree checker
# Check if binary tree is a valid binary search tree
# Each node has to be in the correct position relative to all its ancestors.

MIN_INT = 0
MAX_INT = 9999
def bst_checker(root):
	# Start at root, with an arbitrarily low lower bound
	# and higher upper bound
	MIN_INT = 0
	MAX_INT = 9999
	stack = Stack([(root, MIN_INT, MAX_INT)])

	# DFS:
	while not stack.isEmpty():
		node, lower_bound, upper_bound = stack.pop()

		if (node.value < lower_bound) or (node.value > upper_bound):
			return False 

		if node.left:
			# this node must be less than the current node 
			stack.push((node.left, lower_bound, node.value))
		if node.right:
			# this node must be greater than current node 
			stack.push((node.right, node.value, upper_bound))

	# if none of the nodes were invalid, return true 
	return True


# Recursive version
def bst_valid_recursive(root, lower_bound = MIN_INT, upper_bound = MAX_INT):
	if (not root):
		return True 

	if (root.value > upper_bound or root.value < lower_bound):
		return False 

	return bst_valid_recursive(root.left, lower_bound, root.value) and bst_valid_recursive(root.right, root.value, upper_bound)

# Bracket Validator
openers_to_closers_map = {
'(':')',
'{':'}',
'[':']'
}


openers = openers_to_closers_map.keys()
closers = openers_to_closers_map.value()

def is_valid(code):
	openers_stack = []

	for char in code:
		if char in openers:
			openers_stack.push(char)

		elif char in closers:
			# if there are no openers in the stack
			if not openers_stack:
				return False
			else:
				last_unclosed_opener = openers_stack.pop()
				# if this closer doesn't correspond to the most recently
				# seen unclosed opener, break
				if not openers_to_closers_map[last_unclosed_opener] == char:
					return False 
	return openers_stack == [] 

# Fibonacci number calculator
def fibonacci_recursive(n):
	if n == 1:
		return [0,1]
	else:
		# divide
		s = fibonacci(n - 1)
		# conquer
		s.append(s[-1] + s[-2])
	return s


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

		result = self.fib(n - 1) + self.fib(n - 2)

		self.memo[n] = result

		return result

# Does linked list have a cycle? 
def check_cycle(first_node):
	slow_runner = first_node
	fast_runner = first_node

	while fast_runner != None and fast_runner.next != None:
		slow_runner = slow_runner.next
		fast_runner = fast_runner.next.next

		if fast_runner == slow_runner:
			return True
	return False

# Find rotation point 
# a rotated array: [x, y ,z, a, b, c]
# a rotated array is partially sorted
# => adapted binary search
# rotation point is to the right if current element is greater than first element (we are still in the first sorted subarray)

def find_rot(array):
	l = len(array)
	if l < 2:
		return array[0]

	middle = l // 2
	print array
	# still in first subarray, rotation is to the right
	if array[middle] > array[0]:
		return find_rot(array[middle:])
	else:
		return find_rot(array[:middle])

array = [4, 5, 6, 1, 2, 3, 4]
print find_rot(array)

# Highest product of 3
# given array of ints, find 3 ints that produces the highest product you can get

def highest_product_three(array):
	if len(array) < 3:
		raise Exception('Need more numbers to run')

	highest = max(array[0], array[1])
	highest_product_of_2 = array[0] * array[1]

	lowest = min(array[0], array[1])
	lowest_product_of_2 = array[0] * array[1]

	highest_product_three = array[0] * array[1] * array[2]

	for current in array[2:]:
		# each iteration we check current value not individually, but based on whether it increases the total highest prod of 3 or not
		highest_product_three = max(highest_product_three, current * highest_product_of_2, current * lowest_product_of_2)

		# now we check whether or not to update the highest product of two
		highest_product_of_2 = max(highest_product_of_2, current * highest, current * lowest)

		lowest_product_of_2 = min(lowest_product_of_2, current * highest, current * lowest)

		# Now we store the  highest and lowest numbers so far
		highest = max(highest, current)

		lowest = min(lowest, current)		

	# highest is used in highest_prod_of_2, highest_prod_of_2 is used in highest_prod_of_3. 
	# We work incrementally

	return highest_product_of_three

# Inflight entertainement
# Choose two movies whose total runtimes will equal the exact flight length
# args: flight_length (min) and returns boolean whheter there are two numbers in flight_movies that sum equal flight_length
# within a margin of 20 min
# Needs working on
def find_two_movies(flight_dur, array):

	movie_hash = []

	for current_dir in array:
		diff_upper = flight_dur - current_dur + 20
		diff_lower = flight_dur - current_dur - 20
		
		if current_dir in movie_hash:
			return True

		movie_hash.append(diff_upper)
		movie_hash.append(diff_lower)
	return False


# IN place shuffle
# we want to shuffle an array randomly while using only O(1) space
def shuffle(array):
	if len(array) < 2:
		return array 

	last_index_in_the_array = len(array) - 1

	# xrange doens't exist anymore in python 3
	for index in range(0, len(array)):
		random_choice_index = get_random(index, last_index_in_the_array)

		array[index], array[random_choice_index] = array[random_choice_index], array[index]

# Kth to the last node in a singly-linked list
def kth_to_last(k, head):
	left_node = head
	right_node = head
	i = 1

	while right_node.next is not None:
		right_node = right_node.next
		i += 1
		if i > k:
			left_node = left_node.next
  	
  	return left_node


# Parenthesis matching
# given a sentance with parentheses, along with the opening position of a parenthesis, find the corresponding closing one
def parenthesis_matcher(astring, parenthesis_pos):
	number_openers = 0
	index = parenthesis_pos + 1
	for char in astring[index:]:
		if char == "(":
			number_openers += 1

		if char == ")":
			if number_openers == 0:
				return index
			number_openers -= 1
	return "No valid closing"

astring = "1(3(5(7)"

print parenthesis_matcher(astring, 5)

# Product of all other numbers in the array except current replace current in O(n) time and O(1) space
def get_products_of_all_ints_except_at_index(alist):
	new_list = [1] * len(alist)

	# Plugging product of numbers before the index
	product = 1
	i = 0
	while i < len(alist):
		new_list[i] = product 
		product *= alist[i]
		i += 1

	# Plugging product of numbers after the index
	i = len(alist) - 1
	product = 1
	while i > 0:
		new_list[i] *= product 
		product *= alist[i]
		i -= 1

	return new_list

# Recursive string permutations
# Given a string, return all possible permutations in an array 
def find_all_possible_permutations(astring):
	if len(astring) <= 1:
		return [string]

	all_chars_except_last = astring[:-1]
	last_char = astring[-1]

	partial_permutations = find_all_possible_permutations(all_chars_except_last)

	possible_positions_to_put_last_char = range(len(all_chars_except_last) + 1)
	permutations = []
	for partial_permutation in partial_permutations:
		for position in possible_positions_to_put_last_char:
			permutation = partial_permutation[:position] + last_char + partial_permutation[position:]
			permutations.append(permutation)
	return permutations

def reverse(head):
	current = head
	previous = None 
	next = None 

	# until we have fallen off the end of the list 
	while (current is not None):
		# THis is to know where to go next 
		next = current.next

		# Allocating new next node to current node
		current.next = previous

		# saving current node for next iteration and stepping forward in the list 
		previous = current
		current = next
	return previous

# reverse array of chars in place in place
# In Python, it is not possible to reverse string in place, because strings are immutable
def reverse_string_in_place(array,start, end):

	while start < end:
		temp = array[start]
		print temp
		array[start] = array[end]
		array[end] = temp
		start += 1
		end -= 1
	return array

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
	while True:
		roll1 = rand5()
		roll2 = rand5()

		outcome_number = (roll1 - 1) * 5 + (roll2 - 1) + 1
		
		if outcome_number > 21:
			continue

		return outcome_number % 7 + 1

# Array with duplicate IDs and one single id. Find the single ID
# Do it in O(n) time and O(1) space

def find_non_duplicate(array):
	final_id = 0

	for current_id in array:
		final_id ^= current_id

	return final_id

array = [123, 456, 789, 456, 123, 789, 654, 654, 987, 321, 987]


# Sorting an array in O(n) time and space
def counting_sort(unsorted_scores, max_score):
	scores_count = [0] * (max_score + 1)
	final_array = []

	for score in unsorted_scores:
		scores_count[score] += 1

	for score, count in enumerate(scores_count):
		for j in range(count):
			final_array.append(score)

	return final_array

array = [552, 666, 888, 111, 333, 444, 444, 666, 789, 32, 556, 121, 999]

print counting_sort(array, 999)

# Find the highest floor (100 floors) an egg can be dropped without breaking
# You have two eggs
# Do as few drops as possible
# Do better than a binary approach
# Worst case running time: 14 drops
# Drop first egg first 14 times, then decrease by one floor until hit 99
