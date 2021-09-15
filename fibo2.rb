def fibo(input)
  (2...input).inject([5, 3]){ |memo, number|
    memo << (memo[number - 2] + memo[number - 1])
  }
end

p fibo(10)