Public Class Form1
    Private Sub Button1_Click(sender As Object, e As EventArgs)

    End Sub

    Private Sub DateTimePicker1_ValueChanged(sender As Object, e As EventArgs)

    End Sub

    Private Sub FolderBrowserDialog1_HelpRequest(sender As Object, e As EventArgs)

    End Sub

    Private Sub Form1_MouseEnter(sender As Object, e As EventArgs) Handles MyBase.MouseEnter

    End Sub

    Private Sub Form1_KeyUp(sender As Object, e As KeyEventArgs) Handles MyBase.KeyUp

    End Sub

    Private Sub TextBox1_TextChanged(sender As Object, e As EventArgs) Handles TextBox1.TextChanged

    End Sub

    Private Sub Button1_Click_1(sender As Object, e As EventArgs) Handles Button1.Click

    End Sub

    Private Sub Button1_KeyUp(sender As Object, e As KeyEventArgs) Handles Button1.KeyUp
        TextBox1.Text += Button1.GetHashCode

    End Sub
End Class
