<main>

	<!-- All forms should have this setup for the CSS to work properly -->
	<form onload="init();">

		<div class="fillout">
			<label for="name">Full name</label>
			<input type="text" name="name" id="name">
		</div>
		<div class="fillout">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
		</div>
		<div class="fillout">
			<label for="subject">Subject</label>
			<input type="text" name="subject" id="subject">
		</div>
		<div class="fillout">
			<label for="message">Message</label>
			<textarea name="message" id="message" rows="1"></textarea>
		</div>
		<input type="submit" name="submit" value="Send">

	</form>

</main>
