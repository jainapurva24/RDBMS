﻿Imports System.Data
Imports System.Data.SqlClient

Partial Class Data
    Inherits System.Web.UI.Page
    Dim con As New SqlConnection
    Dim cmd As New SqlCommand
    Dim constr As String = "Data Source=(LocalDB)\v11.0;AttachDbFilename=C:\Users\Ansh\Documents\Visual Studio 2012\WebSites\Main\App_Data\Database.mdf;Integrated Security=True"
    Dim cmdstr As String
    Dim gender As String
    Dim adp As SqlDataAdapter
    Dim ds As DataSet


    Sub search()
        Try
            con = New SqlConnection(constr)
            con.Open()
            cmdstr = "select * from Store where Id like '" & txtSearch.Text & "%' or Name like '" & txtSearch.Text & "%'"
            cmd = New SqlCommand(cmdstr, con)
            cmd.ExecuteNonQuery()
            adp = New SqlDataAdapter(cmd)
            ds = New DataSet
            adp.Fill(ds, "a1")
            GridView1.DataSource = ds.Tables("a1")
            GridView1.DataBind()
            con.Close()
        Catch ex As Exception
            MsgBox(ex.Message.ToString())
        End Try

    End Sub

    Protected Sub btnSearch_Click(sender As Object, e As EventArgs) Handles btnSearch.Click
        search()
    End Sub

    Sub fill()
        Try
            con = New SqlConnection(constr)
            con.Open()
            cmdstr = "select * from Store"
            cmd = New SqlCommand(cmdstr, con)
            cmd.ExecuteNonQuery()
            adp = New SqlDataAdapter(cmd)
            ds = New DataSet
            adp.Fill(ds, "a1")
            GridView1.DataSource = ds.Tables("a1")
            GridView1.DataBind()
            con.Close()
        Catch ex As Exception
            MsgBox(ex.Message.ToString())
        End Try
    End Sub

    Protected Sub Page_Load(sender As Object, e As EventArgs) Handles Me.Load
        fill()
    End Sub
End Class
