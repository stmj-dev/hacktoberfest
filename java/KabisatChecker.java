package java;

import java.util.Scanner;

public class KabisatChecker {
    public static void main(String[] args) {
        Scanner input21 = new Scanner(System.in);
        System.out.print("Masukkan tahun: ");
        int tahun = input21.nextInt();

        String iniTahunKabisat = tahunKabisatDahi(tahun);
       
        System.out.println(iniTahunKabisat);
    }

    private static String tahunKabisatDahi(int tahun) {
        if ((tahun % 4) == 0 && ((tahun % 100 ) !=0 || (tahun % 400) == 0) {
            return tahun + " Adalah tahun kabisat";
        }
        
        return tahun + " Bukan tahun kabisat";        
    }
}
