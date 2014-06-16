<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">

<xsl:template match="/">
	<html>
		<link type="text/css" rel="stylesheet" href="style.css" />
		<body>
		  	<ul>
		    	<xsl:for-each select="udata/items/item">
					<a href="http://wextor.ru{@link}"><li><xsl:value-of select="@name"/></li></a>
				</xsl:for-each>
			</ul>
  		</body>
    </html>
</xsl:template>

</xsl:stylesheet>