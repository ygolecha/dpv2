   <style>
   div.pagination {
   	padding: 3px;
   	margin: 3px;
   }

   div.pagination a {
   	padding: 2px 5px 2px 5px;
   	margin: 2px;
   	border: 1px solid #AAAADD;

   	text-decoration: none; /* no underline */
   	color: #000099;
   }
   div.pagination a:hover, div.pagination a:active {
   	border: 1px solid #000099;

   	color: #000;
   }
   div.pagination span.current {
   	padding: 2px 5px 2px 5px;
   	margin: 2px;
   	border: 1px solid #000099;

   	font-weight: bold;
   	background-color: #000099;
   	color: #FFF;
   }
   div.pagination span.disabled {
   	padding: 2px 5px 2px 5px;
   	margin: 2px;
   	border: 1px solid #EEE;

   	color: #DDD;
   }
   </style>
   ~assign var=adjacents value=3`
   ~assign var=targetpage value="pagination.php"`
   ~assign var=prev value=$currentPage - 1`							<!--//previous page is page - 1-->
   ~assign var=next value=$currentPage + 1`							<!--//next page is page + 1-->
   ~assign var=lastpage value=$totalPages`		<!--//lastpage is = total pages / items per page, rounded up.-->
   ~assign var=lpm1 value=$lastpage - 1`						<!--//last page minus 1-->

	<!--
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	-->
	~assign var=pagination value= ""`
    ~if $lastpage eq 1`
	
	~$pagination = $pagination|cat:"<div class=\"pagination\">"`
	<!-- previous button -->
	~if $page eq 1` 
	~$pagination= $pagination|cat:"<a href=\"$targetpage?page=$prev\"> previous</a>"`
	~else
	~$pagination= $pagination|cat:"<span class=\"disabled\"> previous</span>"`	
    ~/if`
	<!-- pages -->	
	~if $lastpage lt (7 + ($adjacents * 2))`	<!--//not enough pages to bother breaking it up-->
	~for $counter = 1 to $lastpage`
	~if $counter eq $page`
	~$pagination= $pagination|cat:"<span class=\"current\">$counter</span>"`
	~else
	$pagination= $pagination|cat:"<a href=\"$targetpage?page=$counter\">$counter</a>"`					
    ~/if`
    ~/for`
    ~/if`
   

	~if $page lt ($counter - 1) `
	~$pagination= $pagination|cat:"<a href=\"$targetpage?page=$next\">next </a>"`
	~else
	~$pagination= $pagination|cat:"<span class=\"disabled\">next </span>"`
	~/if`
	~$pagination= $pagination|cat:"</div>\n"`		
	
~/if`