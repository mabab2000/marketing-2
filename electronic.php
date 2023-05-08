<link href="style.css" rel="stylesheet">

<body>
	
    <?php
include('connection.php');

// Retrieve data from the database
$query = "SELECT * FROM images";
$result = $conn->query($query);

?>


<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<div class="overflow-x-auto">
  <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
    <thead class="ltr:text-left rtl:text-right">
      <tr>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
          Id
        </th>
		<th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
          Title
        </th>
		<th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
          Name
        </th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
          Description
        </th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
          Type
        </th>
        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
         Action 
        </th>
        <th class="px-4 py-2"></th>
      </tr>
    </thead>

	<tbody>
			<?php while ($row = $result->fetch_assoc()): ?>
				<tr>
                <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row['id']; ?></td>
					<td  class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row['head']; ?></td>
					<td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row['name']; ?></td>
					<td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row['description']; ?></td>
					<td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo $row['type']; ?></td>
						<td>
						
						<a
  class="inline-block rounded border border-indigo-600 bg-red-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
  href="delete.php?id=<?php echo $row['id'];?>"
>
  Delete
</a>			

          
        </td>
                        
					
				</tr>
			<?php endwhile; ?>
		</tbody>
    
  </table>
</div>


	</table>
</body>
</html>


</body>
</html>
