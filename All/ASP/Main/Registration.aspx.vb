﻿Imports System.Data
Imports System.Data.SqlClient

Partial Class Registration
    Inherits System.Web.UI.Page
    Dim con As New SqlConnection
    Dim cmd As New SqlCommand
    Dim constr As String = "Data Source=(LocalDB)\v11.0;AttachDbFilename=C:\Users\Ansh\Documents\Visual Studio 2012\WebSites\Main\App_Data\Database.mdf;Integrated Security=True"
    Dim cmdstr As String
    Dim adp As SqlDataAdapter
    Dim ds As DataSet

    Protected Sub btnInsert_Click(sender As Object, e As EventArgs) Handles btnRegister.Click

        Try
            con = New SqlConnection(constr)
            con.Open()
            cmdstr = "insert into a1 values('" & txtId.Text & "', '" & txtName.Text & "','" & Calendar1.SelectedDate & "', '" & txtEmail.Text & "', '" & txtPass.Text & "')"
            cmd = New SqlCommand(cmdstr, con)
            cmd.ExecuteNonQuery()
            con.Close()
            MsgBox("Registered!")
        Catch ex As Exception
            MsgBox(ex.Message.ToString())
        End Try

    End Sub
End Class
