var cellPhone = {
// Properties
	color: "black",
	brand: "iPhone",
	model: "6s",
	storage: "16gb",
	manufactured: "2015",
	carrier: "AT&T",
	locked: true,
// Methods
	unclock: function() {
		this.locked = false;
	},
	lock: function() {
		this.locked = true;
	},
	makeACall: function() {
		return "Making a call";
	},
	text: function() {
		return "Sending a text";
	}
}