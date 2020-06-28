package main

import (
	"fmt"
	"strconv"
)
func main(){
	fmt.Println(11)
	var st string= "false"
	var b bool
	b, _ = strconv.ParseBool(st)
	fmt.Printf("str type %T str = %v",b,b)

	var str2 string = "1111"
	var n1 int64
	n1, _ = strconv.ParseInt(str2, 10,8)
	fmt.Printf("n1 type %T n1=%v\n", n1, n1)

	var str3 = "3.14"
	var f1 float64

	f1, _ = strconv.ParseFloat(str3,64)
	fmt.Printf("f1 type %T f1 = %v", f1, f1)
}