namespace LyTest;

class Foo {

    public static function echoLoop(int range) {
        int sum = 0;    
        loop {
            let range -= 1;
            let sum++;
            if range <= 0 {
                break;
            }
        }
        echo sum . "\n"; 
    }

}
