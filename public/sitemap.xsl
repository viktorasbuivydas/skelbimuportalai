<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
                xmlns:html="http://www.w3.org/TR/REC-html40"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xhtml="http://www.w3.org/1999/xhtml"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"
                doctype-public="-//W3C//DTD HTML 4.0 Transitional//EN"
                doctype-system="http://www.w3.org/TR/REC-html40/loose.dtd"/>
    <xsl:template match="/">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <title>XML Sitemap</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.15/js/jquery.tablesorter.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('.table').on('sortEnd', function(){
                            $(this).find('tbody > tr').removeClass('odd');
                            $(this).find('tbody > tr:even').addClass('odd');
                        })
                        .tablesorter();
                    });
                </script>
                <style type="text/css">
                    body {
                        font-family: Helvetica, Arial, sans-serif;
                        font-size: 13px;
                        color: #545353;
                        padding: 50px;
                    }
                    a {
                        color: #000;
                        text-decoration: none;
                    }
                    a:hover {
                        text-decoration: underline;
                    }
                    p {
                        margin: 10px 3px;
                        line-height: 1.3em;
                    }
                    p a {
                        color: #CC3300;
                        font-weight: bold;
                    }
                    table {
                        border-collapse: collapse;
                        border: none;
                    }
                    th,
                    td {
                        text-align: left;
                        font-size: 13px;
                        padding: 7px;
                        vertical-align: middle;
                    }
                    #content {
                        margin: 0 auto;
                        width: auto;
                    }
                    .table {
                        table-layout: fixed;
                        width: 100%;
                        max-width: 100%;
                        margin-bottom: 30px;
                    }
                    .table thead {
                        border-bottom: 1px solid #000;
                    }
                    .table thead th {
                        cursor: pointer;
                    }
                    .table tbody {
                        border-bottom: 1px solid #000;
                    }
                    .table tbody td {
                        padding: 7px;
                        vertical-align: middle;
                    }
                    .table tr.odd {
                        background-color: #eee;
                    }
                    .table tbody tr:hover {
                        background-color: #ccc;
                    }
                    .table tbody tr:hover td,
                    .table tbody tr:hover td a {
                        color: #000;
                    }
                    .copyright a {
                        color: #CC3300;
                        font-weight: bold;
                    }
                </style>
            </head>
            <body>
                <div id="content">
                    <h1>XML Sitemap</h1>
                    <p>
                        This is an XML Sitemap which is used to help search engines better index this site.
                    </p>
                    <p>
                        You can find more information about XML sitemaps on <a href="http://sitemaps.org" target="_blank">sitemaps.org</a>.
                    </p>
                    <p>
                        This sitemap contains <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/> URLs.
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="40%">URL</th>
                                <th width="15%">Hreflang</th>
                                <th width="15%">Change Freq.</th>
                                <th width="10%">Priority</th>
                                <th width="20%">Last Modified</th>
                            </tr>
                        </thead>
                        <tbody>
                            <xsl:for-each select="sitemap:urlset/sitemap:url">
                                <xsl:variable name="itemClass">
                                    <xsl:choose>
                                        <xsl:when test="position() mod 2 = 1">odd</xsl:when>
                                        <xsl:otherwise></xsl:otherwise>
                                    </xsl:choose>
                                </xsl:variable>
                                <tr class="{$itemClass}">
                                    <td>
                                        <a href="{sitemap:loc}">
                                            <xsl:value-of select="sitemap:loc"/>
                                        </a>
                                    </td>
                                    <td>
                                        <xsl:choose>
                                            <xsl:when test="xhtml:link[@rel='alternate']">
                                                <xsl:value-of select="xhtml:link[@rel='alternate']/@hreflang"/>
                                            </xsl:when>
                                            <xsl:otherwise>-</xsl:otherwise>
                                        </xsl:choose>
                                    </td>
                                    <td>
                                        <xsl:value-of select="sitemap:changefreq"/>
                                    </td>
                                    <td>
                                        <xsl:value-of select="sitemap:priority"/>
                                    </td>
                                    <td>
                                        <xsl:choose>
                                            <xsl:when test="sitemap:lastmod">
                                                <xsl:value-of select="sitemap:lastmod"/>
                                            </xsl:when>
                                            <xsl:otherwise>-</xsl:otherwise>
                                        </xsl:choose>
                                    </td>
                                </tr>
                            </xsl:for-each>
                        </tbody>
                    </table>
                    <div class="copyright">
                        Copyright &#169; <a href="http://skelbimuportalai.test" target="_blank">Laravel</a> 2026. All rights reserved.
                    </div>
                </div>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
