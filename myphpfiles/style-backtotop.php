.cd-top {
		background: rgba(232, 98, 86, 0.8) url('<?php echo bloginfo('stylesheet_directory').'/images/HOMEPAGE/cd-top-arrow.svg';?>') no-repeat center 50%;

		display: inline-block;
		height: 40px;
		width: 40px;
		position: fixed;
		z-index: 7;
		bottom: 40px;
		left: 40px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
		/* image replacement properties */
		overflow: hidden;
		text-indent: 100%;
		white-space: nowrap;
		visibility: hidden;
		opacity: 0;
		-webkit-transition: opacity .3s 0s, visibility 0s .3s;
		-moz-transition: opacity .3s 0s, visibility 0s .3s;
		transition: opacity .3s 0s, visibility 0s .3s;
	}
	.cd-top.cd-is-visible, .cd-top.cd-fade-out, .no-touch .cd-top:hover {
	  -webkit-transition: opacity .3s 0s, visibility 0s 0s;
	  -moz-transition: opacity .3s 0s, visibility 0s 0s;
	  transition: opacity .3s 0s, visibility 0s 0s;
	}
	.cd-top.cd-is-visible {
	  /* the button becomes visible */
	  visibility: visible;
	  opacity: 1;
	}
	.cd-top.cd-fade-out {
	  /* if the user keeps scrolling down, the button is out of focus and becomes less visible */
	  opacity: .5;
	}
	.cd-top:hover {
	  background-color: #ff105b;
	  opacity: 1;
	}
	@media only screen and (min-width: 768px) {
	  .cd-top {
	    right: 20px;
	    bottom: 20px;
	  }
	}
	@media only screen and (min-width: 1024px) {
	  .cd-top {
	    height: 60px;
	    width: 60px;
	    right: 30px;
	    bottom: 30px;
	  }
	}