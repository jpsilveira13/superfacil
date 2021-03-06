
	<form enctype="multipart/form-data" action="index.php?ToDo={{ FormAction|raw }}" onsubmit="return ValidateForm(CheckMessageForm)" id="frmMessage" method="post">
	<input type="hidden" name="orderId" value="{{ OrderId|raw }}">
	<input type="hidden" name="messageId" value="{{ MessageId|raw }}">
	<div class="BodyContainer">
	<table class="OuterPanel">
	  <tr>
		<td class="Heading1" id="tdHeading">{{ Title|raw }}</td>
		</tr>
		<tr>
		<td class="Intro">
			<p>{{ Intro|raw }}</p>
			{{ Message|raw }}
			<p><input type="submit" name="SubmitButton1" value="{{ ButtonAction|raw }}" class="btn">&nbsp; <input type="button" name="CancelButton1" value="{% lang 'Cancel' %}" class="btn btn-cancel" onclick="ConfirmCancel()"></p>
		</td>
	  </tr>
		<tr>
			<td>
			  <table class="Panel">
				<tr>
				  <td class="Heading2" colspan=2>{% lang 'MessageDetails' %}</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{{ MessageToFrom|raw }}:
					</td>
					<td>
						<input type="text" id="customer" name="customer" class="Field400" value="{{ MessageTo|raw }}" readonly disabled style="background-color:#EBEBE4; border:solid 1px #7F9DB9">
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'MessageSubject' %}:
					</td>
					<td>
						<input type="text" id="subject" name="subject" class="Field400" value="{{ MessageSubject|raw }}">
					</td>
				</tr>
				<tr>
					<td class="FieldLabel">
						<span class="Required">*</span>&nbsp;{% lang 'MessageContent' %}:
					</td>
					<td>
						<textarea id="message" name="message" class="Field400" rows="7">{{ MessageContent|raw }}</textarea>
					</td>
				</tr>
			 </table>
			</td>
		</tr>
	</table>
	<table>
				<tr>
					<td class="Gap"><input type="submit" name="SubmitButton1" value="{{ ButtonAction|raw }}" class="btn">&nbsp; <input type="button" name="CancelButton1" value="{% lang 'Cancel' %}" class="btn btn-cancel" onclick="ConfirmCancel()">
					</td>
				</tr>
	</table>
	</div>
	</form>

	<script type="text/javascript">

		function CheckMessageForm() {
			var subject = document.getElementById("subject");
			var message = document.getElementById("message");

			if(subject.value == "") {
				alert("{% lang 'EnterMessageSubject' %}");
				subject.focus();
				return false;
			}

			if(message.value == "") {
				alert("{% lang 'EnterMessageContent' %}");
				message.focus();
				return false;
			}

			return true;
		}

		function ConfirmCancel()
		{
			if(confirm("{% lang 'ConfirmCancelMessage' %}"))
				document.location.href = "index.php?ToDo=viewOrderMessages&orderId={{ OrderId|raw }}";
		}

	</script>
