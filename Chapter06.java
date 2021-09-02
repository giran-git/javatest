
public class Chapter06 {
	public static void main(String[] args) {
		int val = 2 + 5;
		System.out.println(val);

		val--;
		System.out.println(val);

		val *= 5;
		System.out.println(val);

		boolean bool = (val == 6);
        System.out.println(bool);

        bool = (val<50) && (val % 7 == 0);
        System.out.println(bool);
	}
}
