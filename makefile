all: .MSG css
.MSG:
	@echo "Making it so, boss..."
css: clean
	@echo "  ++ Compiling Bootstrap files..."
	recess --compile --compress less/bootstrap.less > css/cust-bootstrap.min.css

clean:
	rm -f css/cust-bootstrap.min.css
	touch css/cust-bootstrap.min.css

