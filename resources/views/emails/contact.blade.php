
<table>
	<tr style="padding:5px 5px 15px;">
		<td colspan="2" valign="top">
			Contact form with following details has been submitted on www.avadvisorygroup.com:
		</td>
	</tr>
	<tr style="padding:5px;">
		<td colspan="2" valign="top">
		</td>
	</tr>
	<tr style="padding:5px;">
		<td valign="top">
			<b>Name:</b>
		</td>
		<td valign="top">
			{{ $contact->customer_name }}
		</td>
	</tr>
	<tr style="padding:5px;">
		<td valign="top">
			<b>Contact:</b>
		</td>
		<td valign="top">
			{{ $contact->customer_contact }}
		</td>
	</tr>
	<tr style="padding:5px;">
		<td valign="top">
			<b>Message:</b>
		</td>
		<td valign="top">
			{{ $contact->customer_message }}
		</td>
	</tr>
</table>
