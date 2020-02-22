package main

import "fmt"

func main() {

	arr01 := []int{34, 45, 3, 6, 76, 34, 46, 809, 92, 8}

	fmt.Print("排序前")
	fmt.Println(arr01)

	insertSort(arr01)

	fmt.Print("排序后")
	fmt.Println(arr01)
}

func insertSort(arr []int) {

	for j := 1; j < len(arr); j++ {
		key := arr[j]
		i := j - 1

		for i >= 0 && arr[i] > key {
			arr[i+1] = arr[i]
			i--
		}
		arr[i+1] = key
	}
}
