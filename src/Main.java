import org.eclipse.jetty.server.Server;
import org.eclipse.jetty.webapp.WebAppContext;


public class Main
{
    public static void main( String[] args ) throws Exception
    {
    	
    	
    	/*  Server server = new Server(8080);

    	  ServletContextHandler context = new ServletContextHandler(ServletContextHandler.SESSIONS);
    	  context.setResourceBase("/home/barais/git/jamp/src/main/webapp");
          context.setContextPath("/");
          context.addServlet(QuercusServlet.class.getName(),"/*.php");
          System.err.println(QuercusServlet.class.getName());
          
          
          
          
 //         QuercusServlet servlet  =new QuercusServlet();
          
          
          
//          servlet.createPhpIni();
//          servlet.init();
          context.addServlet(new ServletHolder(QuercusServlet.class),"*.php");
          
          server.setHandler(context);
          context.getInitParams().put("license-directory", "WEB-INF/licenses");
          context.getInitParams().put("compile", "true");
          context.getInitParams().put("database", "UTF-8");
          context.getInitParams().put("script-encoding", "jdbc/test");
          context.getInitParams().put("ini-file", "WEB-INF/php.ini");
          

    	
    	
 //         System.err.println(   servlet.getServletContext());
       
   //       servlet.setLicenseDirectory("WEB-INF/licenses");
   //       servlet.setCompile("true");
   //       servlet.setCompileFailover("true");
          
          
    	  
          server.start();
          server.join();*/
    	
    	 Server server = new Server(8080);
    	 
         WebAppContext context = new WebAppContext();
         context.setDescriptor("webappres/WEB-INF/web.xml");
         context.setResourceBase("webappres/");
         context.setContextPath("/");
         context.setParentLoaderPriority(true);
  
         server.setHandler(context);
  
         server.start();
         server.join();

    	//ScriptEngineManager manager = new ScriptEngineManager();
    	
/*    	QuercusEngine engine = new QuercusEngine();
    	engine.setOutputStream(System.out);
    	engine.setIni("foo", "bar");
    	
    	engine.getQuercus().addInitModule(new DateModule());;
    	engine.getQuercus().addInitModule(new LogFunction());;
    	//engine.init();
    	
    	engine.execute("<?php print(time()); ?>") ;*/
    }
}