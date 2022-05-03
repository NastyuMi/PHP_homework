<?php
$array2["Monaco"] = array("capital"=>"Monaco", "population"=>"1.034");
$array2["Switzerland"] = array("capital"=>"Berne", "population"=>"12.700");
$array2["Ecuador"] = array("capital"=>"Quito", "population"=>"1.739.000");
echo '<table width="500px" border="1">
        <tr>
            <td>2x3</td>
            <td>3x2</td>
        </tr>
        <tr>
            <td>';
echo '            <table border="1" align="center" width="100%">
                    <tr>
                        <td>';
echo $array2["Monaco"]["capital"];
echo '                  </td>
                        <td>';
echo $array2["Monaco"]["population"];
echo '                  </td>
                    </tr>
                    <tr>
                        <td>';
echo $array2["Switzerland"]["capital"];
echo '                  </td>
                        <td>';
echo $array2["Switzerland"]["population"];
echo '                  </td>
                    </tr>
                    <tr>
                        <td>';
echo $array2["Ecuador"]["capital"];
echo '                  </td>
                        <td>';
echo $array2["Ecuador"]["population"];
echo '                  </td>
                    </tr>
                </table>';
echo '   </td>
            <td>';
echo '            <table border="1" align="center" width="100%">
                    <tr>
                        <td>';
echo $array2["Monaco"]["capital"];
echo '                  </td>
                        <td>';
echo $array2["Switzerland"]["capital"];
echo '                  </td> 
                        <td>';
echo $array2["Ecuador"]["capital"];
echo '                  </td>
                    </tr>
                    <tr>
                        <td>';
echo $array2["Monaco"]["population"];
echo '                  </td>
                        <td>';
echo $array2["Switzerland"]["population"];
echo '                  </td>
                        <td>';
echo $array2["Ecuador"]["population"];
echo '                  </td>
                    </tr>
                </table>';
echo '   </td>
        </tr>
</table>';
