#学习笔记
##时间复杂度和空间复杂度
+ O表达的是 它的复杂度是n的怎样一个函数
##时间复杂度:
公式 ： T(n) = O( f(n) ) f(n) 表示每行代码执行次数之和，而 O 表示正比例关系 
1. O(1) : 常数复杂度
2. O(log n) 对数复杂度 如二分查找
3. O(n) 线性时间复杂度 如二叉树遍历，前序，中序，后续
4. O(n^2) 平方 冒泡排序
5. O(n^3) 立方
6. O(2^n) 指数
7. O(n!) 阶乘

+ O(1):无论代码执行了多少行，只要是没有循环等复杂结构，那这个代码的时间复杂度就都是O(1)

+ O(n): for循环里面会执行n遍代码，消耗的时间随着n的变化而变化。所以用O(n)标识

+ O(n^2)：O(n)的代码在循环一遍，两个for

###空间复杂度
1.如果代码里又数组，数组长度就是空间复杂度。一维数组空间复杂度为传入元素的个数。如果是二维数组，数组长度为n平方，空间复杂度为n平方。

2.如果是递归，递归最深深度，就是空间复杂度。

---
##数组，链表，跳表（总结）
###Array(数组)
<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-d01d2178a94e6e6d.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240" />

###时间复杂度
<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-4a9f3d5bc7a23495.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">

###插入
<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-7d231baf52c4ca22.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">

1. 优点：无论访问哪一个元素，时间复杂度都是 O(1);
2. 缺点：删除，增加元素，时间复杂度高，需要遍历前后移动下标，所以是  O(n)的时间复杂度。删除时，调用垃圾回收机制size-1。

###Linked List(链表)
<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-7514d3b06e5bbecd.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">
<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-6ff51a9f6d8631b1.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240">

1. 每个元素都有两个属性,Value和Next 。它的每一个元素一般用class定义。Next指向下一个元素。串在一起形成了一个链表。
2. 如果只有一个指针就叫做单链表，
3. 可以往前或者往后指，往前指它的先前指针就做（previous）这样就叫做双向链表。
4. 头指针用Head表示，尾指针用Tail。最后一个指针它的Next指向空，因为没有Next指针了。Tail的Next指针也可以指回到Head来。这个就叫做循环链表。
###添加删除操作
<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-d8cad54cbc5ddcee.png">

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-eb61915df6048d10.png">

1. 增加或删除节点的话，没有引起整个链表的群移操作，也不需要复制元素，挪动元素到新的位置，所以它移动的效率和修改的操作效率非常高，复杂度为O(1)
2. 这个结构导致了访问链表中的任何一个位置，操作就不再简单了，复杂度为O(n)

###Skip List(跳表)
####特点
* 只能用于元素有序的情况。（跳表里的元素始终必须是有序的）不然没发用跳表。

* 所以，跳表（Skip List）对标的是平衡树（AVL Tree）和二分查找，是一种插入/删除/搜索 都是 O(log n)的数据结构。1989年出现。
* 优点：原理简单，容易实现，方便扩展，效率更高。因此在一些热门的项目用来替代平衡树，如Redis，LevelDB 等。

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-5cb2e38336c682a1.png">

###给有序链表加速
* 升纬，添加一级索引

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-b1d0956c9e168164.png">


* 如果再快加二级索引

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-9d28ee3f85132ede.png">

* 以此类推可以加更多的索引

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-5e013dc7b607a95e.png">

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-3f7a3e015e1728dc.png">

###现实中跳表的形态

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-1ca5cb5a3c38f43f.png">

* 维护成本相对较高，如果增加一个元素或者删除一个元素，都需要把它的索引都更新一遍，在这个过程中，它的时间复杂度就回编程了logn了

###空间复杂度分析
<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-f8c36c23119b7684.png">

---
##栈，队列，优先队列，双端队列

###stack

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-4a20b407b129cbae.png">

###Queue

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-5d8e373a3b18b3f0.png">

* Stack: 先入后出；添加，删除皆为O(1) 查询O(n)
* Queue:先入后出；添加，删除皆为O(1) 查询O(n)

###双端队列 Deque

<img width="400" src="https://upload-images.jianshu.io/upload_images/17405891-1a6615bf72b9f80a.png">

* 简单理解：两端可以进出的Queue       Deque - double ended queue
* 插入和删除都是O(1)操作  因为元素没有顺序，必须把Queue里面去啊不看一遍，所以查询是O(n)。