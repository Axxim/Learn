
  <h1>Example page header <small>Subtext for header</small></h1>

<form class="form-horizontal">
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="title">Title</label>
			<div class="controls">
				<input type="text" class="input-xlarge" id="title" placeholder="Functions" />
				<p class="help-block">The title of your tutorial, not including any language information.</p>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="optionsCheckbox">Public</label>
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox" id="optionsCheckbox" value="option1" />
					Option one is this and that—be sure to include why it's great
				</label>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="language">Language</label>
			<div class="controls">
				<select id="language">
					<option>-- SELECT --</option>
					<option>HTML</option>
					<option>CSS</option>
					<option>PHP</option>
					<option>JavaScript</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="category">Category</label>
			<div class="controls">
				<input type="text" name="category" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]">
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="tutorial">Tutorial</label>
			<div class="controls">
				<textarea class="input-xlarge" id="tutorial" name="tutorial" rows="3"></textarea>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Add Tutorial</button>
			<button class="btn">Nevermind</button>
		</div>
	</fieldset>
</form>
