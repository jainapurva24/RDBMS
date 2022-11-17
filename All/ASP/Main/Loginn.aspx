<%@ Page Title="" Language="VB" MasterPageFile="~/MasterPage.master" AutoEventWireup="false" CodeFile="Loginn.aspx.vb" Inherits="Loginn" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .auto-style5
        {
            font-size: large;
            text-align: right;
        }
        .auto-style6
        {
            height: 31px;
            text-align: right;
        }
        .auto-style7
        {
            text-align: left;
            height: 31px;
        }
        .auto-style9
        {
            height: 33px;
            text-align: right;
        }
        .auto-style8
        {
            height: 33px;
            text-align: left;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <p style="text-align: center">
        <strong><span class="auto-style5">Login</span><table class="auto-style1">
            <tr>
                <td class="auto-style6">Email</td>
                <td class="auto-style7">
                    <asp:TextBox ID="txtEmail" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td class="auto-style9">Password</td>
                <td class="auto-style8">
                    <asp:TextBox ID="txtPass" runat="server"></asp:TextBox>
                </td>
            </tr>
            <tr>
                <td class="auto-style9">&nbsp;</td>
                <td class="auto-style8">
                    <asp:Button ID="btnLogin" runat="server" Text="Login" />
                </td>
            </tr>
        </table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>
    </p>
</asp:Content>

