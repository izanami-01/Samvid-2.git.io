// Java program for the above approach
import java.util.*;
class GFG
{
 
  // Function to minimize difference
  // between maximum and minimum array
  // elements by removing a K-length subarray
  static void minimiseDifference(int[] arr, int K)
  {
    // Size of array
    int N = arr.length;
 
    // Stores the maximum and minimum
    // in the suffix subarray [i .. N-1]
    int[] maxSuffix = new int[N + 1];
    int[] minSuffix = new int[N + 1];
 
    maxSuffix[N] = -1000000000;
    minSuffix[N] = 1000000000;
    maxSuffix[N - 1] = arr[N - 1];
    minSuffix[N - 1] = arr[N - 1];
 
    // Constructing the maxSuffix and
    // minSuffix arrays
 
    // Traverse the array
    for (int i = N - 2; i >= 0; --i) {
 
      maxSuffix[i]
        = Math.max(maxSuffix[i + 1], arr[i]);
      minSuffix[i]
        = Math.min(minSuffix[i + 1], arr[i]);
    }
 
    // Stores the maximum and minimum
    // in the prefix subarray [0 .. i-1]
    int maxPrefix = arr[0];
    int minPrefix = arr[0];
 
    // Store the minimum difference
    int minDiff = maxSuffix[K] - minSuffix[K];
 
    // Traverse the array
    for (int i = 1; i < N; ++i) {
 
      // If the suffix doesn't exceed
      // the end of the array
      if (i + K <= N) {
 
        // Store the maximum element
        // in array after removing
        // subarray of size K
        int maximum
          = Math.max(maxSuffix[i + K], maxPrefix);
 
        // Stores the maximum element
        // in array after removing
        // subarray of size K
        int minimum
          = Math.min(minSuffix[i + K], minPrefix);
 
        // Update minimum difference
        minDiff
          = Math.min(minDiff, maximum - minimum);
      }
 
      // Updating the maxPrefix and
      // minPrefix with current element
      maxPrefix = Math.max(maxPrefix, arr[i]);
      minPrefix = Math.min(minPrefix, arr[i]);
    }
 
    // Print the minimum difference
    System.out.print(minDiff);
  }
 
  // Driver Code
  public static void main(String[] args)
  {
    int[] arr = { 4, 5, 8, 9, 1, 2 };
    int K = 2;
    minimiseDifference(arr, K);
  }
}