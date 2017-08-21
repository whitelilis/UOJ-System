import java.util.Scanner;
class Main {
    public String change(String moneyStr){

        String[] units = {"仟", "佰", "拾", "亿", "仟", "佰", "拾", "万", "仟", "佰", "拾", "", "元", "角", "分"};
        String[] bigs = {"零", "壹", "贰", "叁", "肆", "伍", "陆", "染", "捌", "玖"};

        String result = "";
        // check '.xx', if not found, add
        if(moneyStr.contains(".")){
            if(moneyStr.charAt(moneyStr.length() - 2) == '.'){
                moneyStr = moneyStr + "0";
            }else if(moneyStr.charAt(moneyStr.length() - 3) != '.'){ // last 2 and 3 all not '.', and contians '.', error
                return "dot ERROR";
            }
        }else{// no '.' found
            moneyStr = moneyStr + ".00";
        }

        // length check
        if(moneyStr.length() > units.length){
            return "ERROR";
        }


        for(int i = 0; i < moneyStr.length(); ++i){
            if(moneyStr.charAt(i) == '.'){
                result += "元";
            }else{
                int num = Integer.decode(String.valueOf(moneyStr.charAt(i)));
                result += bigs[num] + units[units.length - moneyStr.length() + i];
            }
        }
        // special rules
        result = result.replaceAll("零分", "");
        result = result.replaceAll("零角$", "整");
        result = result.replaceAll("零[仟佰拾]", "零" );
        result = result.replaceAll("零+", "零");
        result = result.replaceAll("零([万亿元])", "$1");
        result = result.replaceAll("^元", "");
        result = result.replaceAll("亿万", "亿");
        result = result.replaceAll("^壹拾", "拾");

        return result;
    }

    public static void main(String[] args) {
	 Scanner sc = new Scanner (System.in);
	 String a = sc.next();
	 System.out.print(new Main().change(a));
    }
}
