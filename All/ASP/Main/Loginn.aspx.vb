﻿Imports System.Data
Imports System.Data.SqlClient

Partial Class Loginn
    Inherits System.Web.UI.Page
    Dim con As New SqlConnection("Data Source=(LocalDB)\v11.0;AttachDbFilename=C:\Users\Ansh\Documents\Visual Studio 2012\WebSites\Main\App_Data\Database.mdf;Integrated Security=True")
    Dim cmd As New SqlCommand
    Dim cmdstr As String
    Dim adp As SqlDataAdapter
    Dim ds As DataSet

    Protected Sub btnLogin_Click(sender As Object, e As EventArgs) Handles btnLogin.Click
        cmdstr = "select Id from a1 where Email = '" & txtEmail.Text & "'"
        cmd = New SqlCommand(cmdstr, con)
        adp = New SqlDataAdapter(cmd)
        ds = New DataSet
        adp.Fill(ds)
        If ds.Tables(0).Rows.Count > 0 Then
            Session("Login") = ds.Tables(0).Rows(0)("Id").ToString()
            Response.Redirect("Home.aspx")
        End If
    End Sub
End Class
