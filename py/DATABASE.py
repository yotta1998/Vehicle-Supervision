import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="drows"
)



import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="drows"
)




def drowsiness_insertion(ip, photo):
    mycursor = mydb.cursor()
    sql = f"SELECT Vehicle_ID FROM camera WHERE CAM_IP = '{ip}'"
    mycursor.execute(sql)
    vehicle_id = mycursor.fetchone()[0]
    print(vehicle_id)
    
    sql = f"SELECT Driver_ID FROM drivers WHERE Vehicle_ID = {vehicle_id}"
    mycursor.execute(sql)
    driver_id = mycursor.fetchone()[0]
    print(driver_id)
    
    event_des = "drowsiness"
    sql = "INSERT INTO _event (EVENT_DESCRYPTION, Driver_ID) VALUES (%s, %s)"
    values = (event_des, driver_id)
    mycursor.execute(sql, values)
    
    sql = "INSERT INTO image (PHOTO_PATH, CAM_IP, EVENT_ID) VALUES (%s, %s, (SELECT MAX(EVENT_ID) FROM _event))"
    values = (photo, ip)
    mycursor.execute(sql, values)
    
    mydb.commit()
    mycursor.close()

#drowsiness_insertion("test.mp4", "bruuuuuuu")

