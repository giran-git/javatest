#include <stdio.h>
#include <math.h>

int main(void)
{
  int n, f;
  double i;

  for (n = 1; n <= 1000; n = n + 1) //1から1000の範囲
  {
    if ((n % 3) == 0) //3の倍数なら
    {
      printf("%d\n", n);
    }
    else
    {
      f = (modf(((double)n / (double)10), &i)) * 10 + 0.1; //1の位を抽出する。

      if ((floor(n / 10)) == 3) //10の位が「3」なら
      {
        printf("%d\n", n);
      }
      else if (f == 3) //1の位が「3」なら
      {
        printf("%d\n", n);
      }
    }
  }

  return (0);
}