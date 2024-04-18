// matching specific words
Pattern pattern =Pattern.compile("\\bapple\\b");
Matcher matcher = pattern.matcher("I am eating an apple");

if(matcher.find())
{
    System.out.println("Matcher found");

}
else{
    System.out.println("Not matching word");
}

