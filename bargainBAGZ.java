import java.sql.*;  
import java.util.*;

import javax.mail.*;
import javax.mail.internet.*;
import javax.activation.*;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;


public class bargainBAGZ
{
	public static void main(String []args)
    {
		//call the Telemarketer and AuctionReport functions
		
		Calendar cal =  Calendar.getInstance();
		
		//System.out.println(cal.toString());
		
		if(cal.get(Calendar.DAY_OF_MONTH) == 1)
		{
			System.out.println("It is the first of the month; sending Telemarketer Report.");
			//overwrite the TelemarketerReport.txt file with info from the sql database
			//open the TelemarketerReport.txt file and delete it
			File fold=new File("src/TelemarketerReport.txt");
            fold.delete();
            //File temp=new File("TelemarketerReport.txt");
            File fnew=new File("src/TelemarketerReport.txt");

			try
			{
				//connect to the Database
				Connection myConnection = DriverManager.getConnection("127.0.0.1//infiniteloops","loops","password"); 
				String testQuery;
				Statement stmt;
				ResultSet results; 

				//query the Database
				testQuery =   "SELECT i.`User_Name`,u.`Phone_Num`,i.`Age`,i.`Male`,i.`Annual_Income`"
						  	+ "FROM Users u, Individuals i"
						  	+ "WHERE u.`User_Id` = i.`User_id`";
				stmt = myConnection.createStatement();
				results = stmt.executeQuery(testQuery);
				
				FileWriter f2 = new FileWriter(fnew, false);
				
				 				
				while(results.next())          // iterate through results
				{
				   String line = results.getInt("User_Name") + ": " + results.getString("Phone_Num") + ": " + results.getString("Age")
						   			+ ": " + results.getString("Male") + results.getString("Annual_Income") + "\n";
				   
				   System.out.println(line);
				   f2.write(line);
				   
				}
				
				f2.close();
				
				results.close();
				stmt.close();
				myConnection.close();
			}
			catch(SQLException sqle)
			{
				System.out.print("Something Went Wrong With SQL");
				sqle.printStackTrace();
				
			}
			catch(IOException e)
			{
				e.printStackTrace();
			}
			Telemarketer();
		}
		else
			System.out.println("It is not the first of the month; no Telemarketer Report.");
		
		if(Calendar.SUNDAY == cal.get(Calendar.DAY_OF_WEEK))
		{
			System.out.println("It is Sunday; Sending Auction Report.");
			//overwrite the AuctionReport.txt file with info from the sql database
			//open the AuctionReport.txt file and delete it
			File fold=new File("AuctionReport.txt");
            fold.delete();
            //File temp=new File("../playlist/temp.txt");
            File fnew=new File("AuctionReport.txt");

			try
			{
				//connect to the Database
				Connection myConnection = DriverManager.getConnection("127.0.0.1//infiniteloops","loops","password"); 
				String testQuery;
				Statement stmt;
				ResultSet results; 

				//query the Database
				testQuery =    "SELECT * FROM `Order_History` "
						     + "WHERE `Order_Date` > NOW() - INTERVAL 7 DAY;";
				stmt = myConnection.createStatement();
				results = stmt.executeQuery(testQuery);
				
				FileWriter f2 = new FileWriter(fnew, false);
				//`User_Id`, `Item_No`, `Card_No`, `Order_Date`
	             				
				while(results.next())          // iterate through results
				{
				   String line =results.getInt("User_Id") + ": " + results.getString("Item_No") + ": " + results.getString("Card_No") + ": " + results.getString("Order_Date") + "\n";
				   
				   System.out.println(line);
				   f2.write(line);
				  
				}
			
				
				f2.close();
				
				results.close();
				stmt.close();
				myConnection.close();
			}
			catch(SQLException sqle)
			{
				System.out.print("Something Went Wrong With SQL");
				sqle.printStackTrace();
				
			}
			catch(IOException e)
			{
				e.printStackTrace();
			}
			AuctionReport();
			
		}
		else
			System.out.println("It's not Sunday; no auction report.");
		
   	 
    }
	
	public static void Telemarketer()
	{
		//send monthly report to Telemarketers
		// Recipient's email ID needs to be mentioned.
		String to = "blw5180@psu.edu";

		// Sender's email ID needs to be mentioned
		String from = "TelemarketerReport@gmail.com";
	
		// Assuming you are sending email from localhost
		String host = "localhost";
	
		// Get system properties
		Properties properties = System.getProperties();
	
		// Setup mail server
		properties.setProperty("mail.smtp.host", host);
	
		// Get the default Session object.
		Session session = Session.getDefaultInstance(properties);
	
		try
	 	{
	     // Create a default MimeMessage object.
		 MimeMessage message = new MimeMessage(session);
	
		 // Set From: header field of the header.
		 message.setFrom(new InternetAddress(from));
	
		 // Set To: header field of the header.
		 message.addRecipient(Message.RecipientType.TO,
	                          new InternetAddress(to));
	
		 // Set Subject: header field
		 message.setSubject("Telemarketer Report");
	
		 // Create the message part 
		 BodyPart messageBodyPart = new MimeBodyPart();
	
		 // Fill the message
		 messageBodyPart.setText("Attached is the Telemarketor Report");
	 
		 // Create a multipar message
		 Multipart multipart = new MimeMultipart();
	
		 // Set text message part
		 multipart.addBodyPart(messageBodyPart);
	
		 // Part two is attachment
		 messageBodyPart = new MimeBodyPart();
		 String filename = "TelemarketorReport.txt";
		 DataSource source = new FileDataSource(filename);
		 messageBodyPart.setDataHandler(new DataHandler(source));
		 messageBodyPart.setFileName(filename);
		 multipart.addBodyPart(messageBodyPart);
	
		 // Send the complete message parts
		 message.setContent(multipart );
		
		 // Send message
		 Transport.send(message);
		 System.out.println("Sent TelemarketerReport message successfully....");
	 	}
		catch (MessagingException mex) 
		{
		 System.out.println("****Promblem with messaging!****");
	     mex.printStackTrace();
		}
	}
	
	public static void AuctionReport()
	{
		//send out weekly auction report;

		// Recipient's email ID needs to be mentioned.
		String to = "blw5180@psu.edu";

		// Sender's email ID needs to be mentioned
		String from = "AuctionReport@bargainBAGZ.com";
	
		// Assuming you are sending email from localhost
		String host = "localhost";
	
		// Get system properties
		Properties properties = System.getProperties();
	
		// Setup mail server
		properties.setProperty("mail.smtp.host", host);
	
		// Get the default Session object.
		Session session = Session.getDefaultInstance(properties);
	
		try
	 	{
	     // Create a default MimeMessage object.
		 MimeMessage message = new MimeMessage(session);
	
		 // Set From: header field of the header.
		 message.setFrom(new InternetAddress(from));
	
		 // Set To: header field of the header.
		 message.addRecipient(Message.RecipientType.TO,
	                          new InternetAddress(to));
	
		 // Set Subject: header field
		 message.setSubject("Auction Report");
	
		 // Create the message part 
		 BodyPart messageBodyPart = new MimeBodyPart();
	
		 // Fill the message
		 messageBodyPart.setText("Attached is the Auction Report");
	 
		 // Create a multipar message
		 Multipart multipart = new MimeMultipart();
	
		 // Set text message part
		 multipart.addBodyPart(messageBodyPart);
	
		 // Part two is attachment
		 messageBodyPart = new MimeBodyPart();
		 String filename = "AuctionReport.txt";
		 DataSource source = new FileDataSource(filename);
		 messageBodyPart.setDataHandler(new DataHandler(source));
		 messageBodyPart.setFileName(filename);
		 multipart.addBodyPart(messageBodyPart);
	
		 // Send the complete message parts
		 message.setContent(multipart );
		
		 // Send message
		 Transport.send(message);
		 System.out.println("Sent AuctionReport message successfully....");
	 	}
		catch (MessagingException mex) 
		{
		 System.out.println("****Promblem with messaging!****");
	     mex.printStackTrace();
		}
	}
	
}