-- Tables
CREATE TABLE IF NOT EXISTS user (
    id INT PRIMARY KEY,
    cnic INT ,
    email VARCHAR(40)  ,
    userPassword  VARCHAR(255) ,
    phoneNumber VARCHAR(15) ,
    province VARCHAR(20) ,
    district VARCHAR(20),
    city VARCHAR(20) ,
    address VARCHAR(100) ,
    status VARCHAR(25) ,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedat TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    createdBy INT,
    updatedBy INT
   
);
CREATE TABLE IF NOT EXISTS project(
    id INT PRIMARY KEY  ,
    projectName VARCHAR(100) ,
    description TEXT ,
    status VARCHAR(25)  ,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    createdBy INT  ,
    updatedBy INT
    -- FOREIGN KEY (CreatedBy) REFERENCES Users(CNIC) ON DELETE RESTRICT ON UPDATE CASCADE,
    -- FOREIGN KEY (UpdatedBy) REFERENCES Users(CNIC) ON DELETE SET NULL ON UPDATE CASCADE
);
CREATE TABLE IF NOT EXISTS unit(
    id INT PRIMARY KEY  ,
    buildingNumber VARCHAR(20) ,
    floorNumber VARCHAR(25) ,
    area VARCHAR(100) ,
    status VARCHAR(25) ,
    projectId INT , -- Foreign key to Project table
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    createdBy INT  ,
    updatedBy INT
    --FOREIGN KEY (OccupiedBy) REFERENCES Users(CNIC) ON DELETE SET NULL ON UPDATE CASCADE
   -- FOREIGN KEY (ProjectUnit) REFERENCES Project(ProjectID) ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE IF NOT EXISTS complaint(
    id VARCHAR(20) PRIMARY KEY,
    title VARCHAR(100)  ,
    description TEXT  ,
    status VARCHAR(50)  ,
    unitID INT  ,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    createdBy INT  ,
    updatedBy INT
    -- FOREIGN KEY (CreatedBy) REFERENCES Users(CNIC) ON DELETE RESTRICT ON UPDATE CASCADE
    -- FOREIGN KEY (UpdatedBy) REFERENCES Users(CNIC) ON DELETE SET NULL  ON UPDATE CASCADE
    -- FOREIGN KEY (UnitID) REFERENCES Unit(UnitID) ON DELETE CASCADE ON UPDATE CASCADE

);
CREATE TABLE IF NOT EXISTS document(
    id INT PRIMARY KEY ,
    doucmentTitle VARCHAR(100)  ,
    documentType VARCHAR(25)  ,
    fileURl VARCHAR(255)  ,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    createdby INT  ,
    updatedby INT,
    sourceTable VARCHAR(50)  , --
    sourceId INT --Foreign key to user
    -- FOREIGN KEY (createdBy) REFERENCES Users(CNIC) ON DELETE CASCADE ON UPDATE CASCADE,
    -- FOREIGN KEY (updatedby) REFERENCES Users(CNIC) ON DELETE SET NULL ON UPDATE CASCADE

);
CREATE TABLE IF NOT EXISTS discount_Request(
    id INT PRIMARY KEY Auto_INCREMENT,
    unitID INT ,-- Foreign key to Unit table
    requestedAmount FLOAT(10,2) ,
    reason TEXT ,
    status VARCHAR(20) ,
    remarks TEXT,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    createdBy INT,
    updatedBy INT,
    discountApprovedby INT,
    sourceTable VARCHAR(50)  , --
    sourceId INT  -- Foreign key to user
--     FOREIGN KEY (CreatedBy) REFERENCES Users(CNIC) ON DELETE RESTRICT ON UPDATE CASCADE,
--     FOREIGN KEY (UpdatedBy) REFERENCES Users(CNIC) ON DELETE SET NULL ON UPDATE CASCADE,
--     FOREIGN KEY (UnitID) REFERENCES Unit(UnitID) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE IF NOT EXISTS utility_bill(
   id INT PRIMARY KEY,
    unitId INT  ,
    billType VARCHAR(25)  ,
    amount DECIMAL(10, 2)  ,
    billSettingId VARCHAR(100),
    billMonth Date  ,
    billYear INT  ,
    dueDate DATE  ,
    paymentDate DATE,
    paymentMode VARCHAR(50),
    transactionID VARCHAR(50),
    checkNumber VARCHAR(50),
    bankName VARCHAR(100),
    bankBranch VARCHAR(100),
    paidStatus VARCHAR(25)  ,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    createdBy INT ,
    updatedBy INT
    -- FOREIGN KEY (CreatedBy) REFERENCES Users(CNIC) ON DELETE RESTRICT ON UPDATE CASCADE,
    -- FOREIGN KEY (UpdatedBy) REFERENCES Users(CNIC) ON DELETE SET NULL ON UPDATE CASCADE,
    -- FOREIGN KEY (UnitID) REFERENCES Unit(UnitID) ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE IF NOT EXISTS maintenance_charge(
    id INT PRIMARY KEY,
    unitId INT  ,
    floorNumber VARCHAR(25) ,
    property VARCHAR(100) ,
    title VARCHAR(100) ,
    description TEXT ,
    type VARCHAR(50)  ,
    areaTo VARCHAR(100)  ,
    areaFrom VARCHAR(100)  ,
    amount DECIMAL(10, 2)  ,
    billMonth Date  ,
    billYear INT  ,
    dueDate DATE  ,
    paymentDate DATE,
    paymentMode VARCHAR(50),
    transactionID VARCHAR(50),
    checkNumber VARCHAR(50),
    bankName VARCHAR(100),
    bankBranch VARCHAR(100),
    paidStatus VARCHAR(25)  ,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    createdBy INT  ,
    updatedBy INT
    -- FOREIGN KEY (CreatedBy) REFERENCES Users(CNIC) ON DELETE RESTRICT ON UPDATE CASCADE,
    -- FOREIGN KEY (UpdatedBy) REFERENCES Users(CNIC) ON DELETE SET NULL ON UPDATE CASCADE,
    -- FOREIGN KEY (UnitID) REFERENCES Unit(UnitID) ON DELETE CASCADE ON UPDATE CASCADE
);
CREATE TABLE IF NOT EXISTS rent_charge(
  id INT PRIMARY KEY,
    unitId INT  ,
    floorNumber VARCHAR(25)  ,
    property VARCHAR(100)  ,
     title VARCHAR(100)  ,
    type VARCHAR(50)  ,
    description TEXT  ,
    areaTo VARCHAR(100)  ,
    areaFrom VARCHAR(100)  ,
    amount DECIMAL(10, 2)  ,
    billMonth Date  ,
    billYear INT  ,
    dueDate DATE  ,
    paymentDate DATE,
    paymentMode VARCHAR(50),
    transactionID VARCHAR(50),
    checkNumber VARCHAR(50),
    bankName VARCHAR(100),
    bankBranch VARCHAR(100),
    paidStatus VARCHAR(25)  ,
    createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updatedAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    createdBy INT  ,
    updatedBy INT
    -- FOREIGN KEY (CreatedBy) REFERENCES Users(CNIC) ON DELETE RESTRICT ON UPDATE CASCADE,
    -- FOREIGN KEY (UpdatedBy) REFERENCES Users(CNIC) ON DELETE SET NULL ON UPDATE CASCADE,
    -- FOREIGN KEY (UnitID) REFERENCES Unit(UnitID) ON DELETE CASCADE ON UPDATE CASCADE
);
-