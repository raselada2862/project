<?php
/*  ---------------------------------------------------------------------------
 * 	@package	: PDF File Generator
 *	@author 	: The Creatix
 *	@version	: 1.0
 *	@link		: http://www.TheCreatix.com
 *	@copyright	: Copyright (c) 2015, http://www.TheCreatix.com
 *	--------------------------------------------------------------------------- */

error_reporting(E_ALL);

/****************************************************************************
    included files
****************************************************************************/
include('includes/classess/invoicr.php');
include('includes/common-functions.php');
include('includes/thumbnail.php');
include('../conn/connection.php');

$sqlCom = mysql_query("SELECT * FROM app_config WHERE id = '1'");
$Conmapy = mysql_fetch_array($sqlCom);


$invNo = $_REQUEST['inv_no'];

$sql = mysql_query("SELECT * FROM sales_master AS m LEFT JOIN clients AS c ON c.clientId = m.clientId WHERE m.invoiceNo = '$invNo'");
$row = mysql_fetch_array($sql);

$sqls = mysql_query("SELECT d.id, d.invoiceNo, p.productName, p.productCode, d.unitPrice, d.quantity, d.total, b.brand_name, m.model_name FROM sales_details AS d 
LEFT JOIN products AS p 
ON p.id = d.productCode 
LEFT JOIN brand AS b
ON b.brand_id = p.brand_id
LEFT JOIN model AS m
ON m.model_id = p.model_id
WHERE d.invoiceNo = '$invNo' ORDER BY d.id");

function convertNumber($number)
{
    list($integer, $fraction) = explode(".", (string) $number);

    $output = "";

    if ($integer{0} == "-")
    {
        $output = "negative ";
        $integer    = ltrim($integer, "-");
    }
    else if ($integer{0} == "+")
    {
        $output = "positive ";
        $integer    = ltrim($integer, "+");
    }

    if ($integer{0} == "0")
    {
        $output .= "zero";
    }
    else
    {
        $integer = str_pad($integer, 36, "0", STR_PAD_LEFT);
        $group   = rtrim(chunk_split($integer, 3, " "), " ");
        $groups  = explode(" ", $group);

        $groups2 = array();
        foreach ($groups as $g)
        {
            $groups2[] = convertThreeDigit($g{0}, $g{1}, $g{2});
        }

        for ($z = 0; $z < count($groups2); $z++)
        {
            if ($groups2[$z] != "")
            {
                $output .= $groups2[$z] . convertGroup(11 - $z) . (
                        $z < 11
                        && !array_search('', array_slice($groups2, $z + 1, -1))
                        && $groups2[11] != ''
                        && $groups[11]{0} == '0'
                            ? " and "
                            : ", "
                    );
            }
        }

        $output = rtrim($output, ", ");
    }

    if ($fraction > 0)
    {
        $output .= " point";
        for ($i = 0; $i < strlen($fraction); $i++)
        {
            $output .= " " . convertDigit($fraction{$i});
        }
    }

    return $output;
}

function convertGroup($index)
{
    switch ($index)
    {
        case 11:
            return " decillion";
        case 10:
            return " nonillion";
        case 9:
            return " octillion";
        case 8:
            return " septillion";
        case 7:
            return " sextillion";
        case 6:
            return " quintrillion";
        case 5:
            return " quadrillion";
        case 4:
            return " trillion";
        case 3:
            return " billion";
        case 2:
            return " million";
        case 1:
            return " thousand";
        case 0:
            return "";
    }
}

function convertThreeDigit($digit1, $digit2, $digit3)
{
    $buffer = "";

    if ($digit1 == "0" && $digit2 == "0" && $digit3 == "0")
    {
        return "";
    }

    if ($digit1 != "0")
    {
        $buffer .= convertDigit($digit1) . " hundred";
        if ($digit2 != "0" || $digit3 != "0")
        {
            $buffer .= " and ";
        }
    }

    if ($digit2 != "0")
    {
        $buffer .= convertTwoDigit($digit2, $digit3);
    }
    else if ($digit3 != "0")
    {
        $buffer .= convertDigit($digit3);
    }

    return $buffer;
}

function convertTwoDigit($digit1, $digit2)
{
    if ($digit2 == "0")
    {
        switch ($digit1)
        {
            case "1":
                return "ten";
            case "2":
                return "twenty";
            case "3":
                return "thirty";
            case "4":
                return "forty";
            case "5":
                return "fifty";
            case "6":
                return "sixty";
            case "7":
                return "seventy";
            case "8":
                return "eighty";
            case "9":
                return "ninety";
        }
    } else if ($digit1 == "1")
    {
        switch ($digit2)
        {
            case "1":
                return "eleven";
            case "2":
                return "twelve";
            case "3":
                return "thirteen";
            case "4":
                return "fourteen";
            case "5":
                return "fifteen";
            case "6":
                return "sixteen";
            case "7":
                return "seventeen";
            case "8":
                return "eighteen";
            case "9":
                return "nineteen";
        }
    } else
    {
        $temp = convertDigit($digit2);
        switch ($digit1)
        {
            case "2":
                return "twenty-$temp";
            case "3":
                return "thirty-$temp";
            case "4":
                return "forty-$temp";
            case "5":
                return "fifty-$temp";
            case "6":
                return "sixty-$temp";
            case "7":
                return "seventy-$temp";
            case "8":
                return "eighty-$temp";
            case "9":
                return "ninety-$temp";
        }
    }
}

function convertDigit($digit)
{
    switch ($digit)
    {
        case "0":
            return "zero";
        case "1":
            return "one";
        case "2":
            return "two";
        case "3":
            return "three";
        case "4":
            return "four";
        case "5":
            return "five";
        case "6":
            return "six";
        case "7":
            return "seven";
        case "8":
            return "eight";
        case "9":
            return "nine";
    }
}

/*
if(!isset($_POST['AccessFlag'])){
    header("location:index.php");
    return false;
}
*/
/****************************************************************************
    header post
****************************************************************************/
$title = 'Ruppur Auto Parts';
$invocieNo = 'INV-'.$invNo;
$billDate = $row['invoiceDate'];
$dueDate = $row['invoiceDate'];
$PaymentStasus = 'Paid';


/****************************************************************************
    From post
****************************************************************************/
$frmBizName = $Conmapy['name'];
$frmAddress1 = $Conmapy['address'];
$frmAddress2 = '';
$frmPhone = $Conmapy['phone'];
$frmEmail = $Conmapy['email'];
$frmAddInfo = '';


$amounts = $row['paidAmount'];
$word = convertNumber($amounts);


/****************************************************************************
    To post
****************************************************************************/
$toBizName = $row['clientName'];
$toAddress1 = $row['clients_address'];
$toAddress2 = '';
$toPhone = $row['clients_phone'];
$toEmail = '';
$toAddInfo = '';


/****************************************************************************
    Settings post
****************************************************************************/
$currency = 'Tk';
$taxformat = 'off';
$discountFormat = '$';
$pdfColor  = '#00A65A';
//$subtotal = 300;
//$totalBill = 500;




/****************************************************************************
    items listing
****************************************************************************/
//$proName  = $_POST['proName'];
//$proDescArray = $_POST['proDesc'];
//$amountArray = $_POST['amount'];
//$vatArray = $_POST['vat'];
//$priceArray = $_POST['price'];
//$discountArray = $_POST['discount'];
//$totalArray = $_POST['total'];


/****************************************************************************
    pdf generate
****************************************************************************/

//Set default date timezone
date_default_timezone_set('America/Los_Angeles');

//Create a new instance
$invoice = new invoicr("A4",$currency,"en");

//Set number format
$invoice->setNumberFormat(',',' ');

//Set tax format
$invoice->setTaxFormat($taxformat);

//Set tax format
$invoice->setDiscountFormat($discountFormat);

//Set your logo

$imagePath =  'uploads/logo.png';
$invoice->setLogo($imagePath,180,100);

//Set theme color
$invoice->setColor($pdfColor);

//Set type
$invoice->setType($title);

//Set reference
$invoice->setReference($invocieNo);

//Set date
$yrda= strtotime($billDate); 
$billingDate = date('d F, Y', $yrda);

$invoice->setDate($billingDate);

//Set  due date
$invoice->setDue($dueDate);

//Set from
$invoice->setFrom(array($frmBizName,$frmAddress1,$frmPhone,$frmEmail));

//Set to
$invoice->setTo(array($toBizName,$toAddress1,$toPhone,$toEmail));
$SubTotal = 0;
while($rows = mysql_fetch_array($sqls)){
	
	$productName = $rows['productName'];
	$productCode = $rows['productCode'];
	$brand_name = $rows['brand_name'];
	$model_name = $rows['model_name'];
	$proDes = '';
	$quantity = number_format($rows['quantity'],0);
	$price = $rows['unitPrice'];
	$total = $rows['total'];
	
	$invoice->addItem($productCode.' - '.$productName.' - '.'['.$model_name.']'.' '.'['.$brand_name.']',$proDes,$quantity,$price,$total);
	$SubTotal += $total;
}
/*
foreach( $proName as $key => $productName )
{
    $proDes =$proDescArray[$key];
    $amount =$amountArray[$key];
    $price =$priceArray[$key];
    if($_POST['applyDiscount'] == 'yes')
    {
        $discount =$discountArray[$key];
    }
    else
    {
        $discount = false;
    }
    if($_POST['applyTax'] == 'yes')
    {
        $vat = $vatArray[$key];
    }
    else
    {
        $vat = false;
    }
    $total =$totalArray[$key];
    $invoice->addItem($productName,$proDes,$amount,$vat,$price,$discount,$total);
}
*/
//Add totals
$invoice->addTotal("Sub Total",number_format($SubTotal,2));

//add Discount
$Discount = $row['discount'];

if($Discount != '0.00'){
$taxTitle[]  = 'Discount';
$taxValueArray[] = $Discount;
    foreach( $taxTitle as $key => $title )
    {
        $taxValue = $taxValueArray[$key];
        $invoice->addTotal($title,$taxValue);
    }
}

$GrantTotal = $SubTotal - $Discount;

$invoice->addTotal("Total",number_format($GrantTotal,2),true);

if($PaymentStasus != ''){
    //Add badge
    $invoice->addBadge($PaymentStasus);
}

//Add signature

$_POST['sig_name'] = 'Authorised Signatory';
$_POST['sig_designation'] = '';

if($_POST['sig_name'] == '') {
    $sig_name = '';
}
else{
    $sig_name = $_POST['sig_name'];
}
$invoice->setSigName($sig_name);
if($_POST['sig_designation'] == '') {
    $designation = '';
}
else{
    $designation = $_POST['sig_designation'];
}
$invoice->setSigDesig($designation);

$_POST['notesTitle'] = 'NOTICE';
$_POST['extraNotes'] = 'Make all cheques and cash payable to '.$frmBizName.' Bank accounts only.
If you have any questions concerning this invoice, contact our sales department at '.$frmEmail.'.

Thank you for your business.';
//Add title
if($_POST['extraNotes'] == '') {
    $noteTitle = '';
}
else{
    $noteTitle = $_POST['notesTitle'];
}
$invoice->addTitle($noteTitle);

//Add paragraph


if($_POST['extraNotes'] == '')
{
    $extraNotes = '';
}
else{
    $extraNotes = $_POST['extraNotes'];
}
$invoice->addParagraph($extraNotes);

//Set footernote
$invoice->setFooternote($word);

//Render
$invoice->render();