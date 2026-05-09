package cpp;

import javax.swing.JOptionPane;

public class test {
    public static void main(String[] args) {
        String name = JOptionPane.showInputDialog("What is your name?");
        String ageString = JOptionPane.showInputDialog("What is your age?");
        int age = Integer.parseInt(ageString);

        JOptionPane.showMessageDialog(null, "Hello " + name + " you are " + age + " years old.");
    }
}
