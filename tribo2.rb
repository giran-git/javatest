a, b, c = 1, 3, 7
(10000 - 1).times { a, b, c = b, c, a + b + c }
p a