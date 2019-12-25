package main

import (
	"fmt"
)

// 冒泡排序
func bubbleSort(arr []int) {
	times := len(arr)
	for i := 1; i < len(arr); i++ {
		for i := 1; i < times; i++ {
			if arr[i-1] > arr[i] {
				temp := 0
				temp = arr[i-1]
				arr[i-1] = arr[i]
				arr[i] = temp
			}
		}
		times--
	}
}

func main() {
	// 设置一个切片进行测试
	arr1 := []int{24, 69, 80, 57, 13}
	bubbleSort(arr1)
	fmt.Println(arr1)

	// 给切片添加新的数字，进一步测试
	arr2 := append(arr1, 45, 97, 86)
	bubbleSort(arr2)
	fmt.Println(arr2)
}
