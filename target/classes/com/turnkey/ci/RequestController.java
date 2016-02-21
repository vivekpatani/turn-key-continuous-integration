/**
 * Vivek Patani {FlipSwitch}
 * RequestController.java
 * {Algorithms 0.: Living in Beta}
 */
package com.turnkey.ci;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

/**
 * This is a basic RequestController for Mapping
 */

@Controller
public class RequestController {
	
	@RequestMapping("/request")
	public ModelAndView display(HttpServletRequest request,HttpServletResponse response){
		String t1 = request.getParameter("t1"));
		String t2 = request.getParameter("t2"));
		String t3 = t1.concat(t2);
		
		ModelAndView mv = ModelAndView();
		mv.setViewName("display.jsp");
		mv.addObject("result",t3);
		
		return mv;
	}

}
