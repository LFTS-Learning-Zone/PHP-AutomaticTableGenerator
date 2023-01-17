<?php 
class Table
{


    function GenerateTable($headers, $content = null)
    {
        echo "<table>";
        $this->GenerateTableHeader($headers);
        $this->GenerateTableBody($content);
        echo "</table>";
    }

    function GenerateTableHeader($headers)
    {
        if($headers == null) return;

        echo "<thead>\n <tr>";
        foreach ($headers as $header) 
        {
            echo "<th>$header</th>";
        }
        echo "</tr>\n </thead>";
    }

    /**
     * Creates the body of a table. The input must be an array of arrays. E.g: [['a',1], ['b', 2]];
     *
     * @param [array] $rows
     * @return void
     */
    function GenerateTableBody($rows)
    {
        if($rows == null) return;

        echo "<tbody>";
        foreach ($rows as $row)
        {
            echo "<tr>";
            $this->AppendRow($row);
            echo "</tr>";
        }
        echo "</thead>";
    }

    function AppendRow($row)
    {
        foreach ($row as $cell) 
        {
            echo "<td>$cell</td>";
        }
    }
}

?>