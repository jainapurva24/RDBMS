<%@ Page Title="" Language="VB" MasterPageFile="~/MasterPage.master" AutoEventWireup="false" CodeFile="Data.aspx.vb" Inherits="Data" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">

        .auto-style9
        {
            text-align: left;
            width: 128px;
            height: 26px;
        }
        .auto-style10
        {
            height: 26px;
            width: 686px;
            text-align: left;
        }
        </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table class="auto-style1">
        <tr>
            <td class="auto-style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Search</td>
            <td class="auto-style10">
                <asp:TextBox ID="txtSearch" runat="server" style="margin-left: 0px"></asp:TextBox>
            &nbsp;&nbsp;&nbsp;
                <asp:Button ID="btnSearch" runat="server" style="text-align: right" Text="Search" />
            </td>
        </tr>
    </table>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <asp:GridView ID="GridView1" runat="server" style="text-align: center">
    </asp:GridView>
    <p>
    </p>
    <p>
    </p>
</asp:Content>

