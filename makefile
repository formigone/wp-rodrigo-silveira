all: .MSG css
.MSG:
	@echo "Making it so, boss..."
css:
	@echo "  ++ Compiling Bootstrap files..."
	recess --compile --compress less/bootstrap.less > css/cust-bootstrap.min.css
