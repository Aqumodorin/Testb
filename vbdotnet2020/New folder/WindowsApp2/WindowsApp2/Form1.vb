Public Class Form1

    Dim Message As String = " SALAMOON ALAIKOOM "
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        MessageBox.Show(Message)

    End Sub

    Private Sub TextBox1_TextChanged(sender As Object, e As EventArgs) Handles Button1.Click
        TextBox1.Text = Message
    End Sub

    Private Sub WebBrowser1_DocumentCompleted(sender As Object, e As WebBrowserDocumentCompletedEventArgs)

    End Sub
End Class
