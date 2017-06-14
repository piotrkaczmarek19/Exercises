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
		return arr[n/2] + arr[n/2 - 1]
	return arr[n//2]

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
	if N > M:
		return findMedianUtil(B, M, A, N)

	return findMedianUtil(A, N, B, M)

A = [900]
B = [5, 8, 10, 20]

N = len(A)
M = len(B)

print(findMedian(A, N, B, M)) # Expected output: 10