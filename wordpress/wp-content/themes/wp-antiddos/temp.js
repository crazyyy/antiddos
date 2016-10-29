    if ( typeType == 1 ) {
      // shared
      if ( ( typeVisit == 1 ) && ( typeServ == 3 ) || ( typeVisit == 2 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 3 ) || ( typeVisit == 4 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 3 ) || ( typeVisit == 6 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting3';
      }
      // vps
      else if ( ( typeVisit == 1 ) && ( typeServ == 2 ) || ( typeVisit == 2 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 2 ) || ( typeVisit == 3 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 2 ) || ( typeVisit == 6 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS3';
      }
      // dedic
      else if ( ( typeVisit == 1 ) && ( typeServ == 1 ) || ( typeVisit == 2 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 1 ) || ( typeVisit == 4 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 1 ) || ( typeVisit == 6 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      }
      // remote
      else if ( ( typeVisit == 1 ) && ( typeServ == 4 ) || ( typeVisit == 2 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 4 ) || ( typeVisit == 4 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 4 ) || ( typeVisit == 6 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel3';
      }
      // cluster
      else if ( ( typeVisit == 1 ) && ( typeServ == 5 ) || ( typeVisit == 2 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 5 ) || ( typeVisit == 4 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 5 ) || ( typeVisit == 6 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated3';
      }
      // unknown
      else if ( ( typeVisit == 1 ) && ( typeServ == 6 ) || ( typeVisit == 2 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'Hosting1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 6 ) || ( typeVisit == 4 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'Hosting2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 6 ) || ( typeVisit == 6 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'Hosting3';
      }
    }
    
        if ( typeType == 2 ) {
      // shared
      if ( ( typeVisit == 1 ) && ( typeServ == 3 ) || ( typeVisit == 2 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 3 ) || ( typeVisit == 4 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 3 ) || ( typeVisit == 6 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting3';
      }
      // vps
      else if ( ( typeVisit == 1 ) && ( typeServ == 2 ) || ( typeVisit == 2 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 2 ) || ( typeVisit == 3 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 2 ) || ( typeVisit == 6 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS3';
      }
      // dedic
      else if ( ( typeVisit == 1 ) && ( typeServ == 1 ) || ( typeVisit == 2 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 1 ) || ( typeVisit == 4 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 1 ) || ( typeVisit == 6 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      }
      // remote
      else if ( ( typeVisit == 1 ) && ( typeServ == 4 ) || ( typeVisit == 2 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 4 ) || ( typeVisit == 4 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 4 ) || ( typeVisit == 6 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel3';
      }
      // cluster
      else if ( ( typeVisit == 1 ) && ( typeServ == 5 ) || ( typeVisit == 2 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 5 ) || ( typeVisit == 4 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 5 ) || ( typeVisit == 6 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated3';
      }
      // unknown
      else if ( ( typeVisit == 1 ) && ( typeServ == 6 ) || ( typeVisit == 2 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 6 ) || ( typeVisit == 4 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 6 ) || ( typeVisit == 6 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS3';
      }
    }
    
    if ( typeType == 3 ) {
      // shared
      if ( ( typeVisit == 1 ) && ( typeServ == 3 ) || ( typeVisit == 2 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 3 ) || ( typeVisit == 4 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 3 ) || ( typeVisit == 6 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting3';
      }
      // vps
      else if ( ( typeVisit == 1 ) && ( typeServ == 2 ) || ( typeVisit == 2 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 2 ) || ( typeVisit == 3 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 2 ) || ( typeVisit == 6 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS3';
      }
      // dedic
      else if ( ( typeVisit == 1 ) && ( typeServ == 1 ) || ( typeVisit == 2 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 1 ) || ( typeVisit == 4 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 1 ) || ( typeVisit == 6 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      }
      // remote
      else if ( ( typeVisit == 1 ) && ( typeServ == 4 ) || ( typeVisit == 2 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 4 ) || ( typeVisit == 4 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 4 ) || ( typeVisit == 6 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel3';
      }
      // cluster
      else if ( ( typeVisit == 1 ) && ( typeServ == 5 ) || ( typeVisit == 2 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 5 ) || ( typeVisit == 4 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 5 ) || ( typeVisit == 6 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated3';
      }
      // unknown
      else if ( ( typeVisit == 1 ) && ( typeServ == 6 ) || ( typeVisit == 2 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 6 ) || ( typeVisit == 4 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 6 ) || ( typeVisit == 6 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS3';
      }
    }
    
 if ( typeType == 4 ) {
      // shared
      if ( ( typeVisit == 1 ) && ( typeServ == 3 ) || ( typeVisit == 2 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'Hosting1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 3 ) || ( typeVisit == 4 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'VPS3';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 3 ) || ( typeVisit == 6 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'VPS3';
      }
      // vps
      else if ( ( typeVisit == 1 ) && ( typeServ == 2 ) || ( typeVisit == 2 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 2 ) || ( typeVisit == 3 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS3';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 2 ) || ( typeVisit == 6 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS3';
      }
      // dedic
      else if ( ( typeVisit == 1 ) && ( typeServ == 1 ) || ( typeVisit == 2 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 1 ) || ( typeVisit == 4 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 1 ) || ( typeVisit == 6 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      }
      // remote
      else if ( ( typeVisit == 1 ) && ( typeServ == 4 ) || ( typeVisit == 2 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel2';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 4 ) || ( typeVisit == 4 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 4 ) || ( typeVisit == 6 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel3';
      }
      // cluster
      else if ( ( typeVisit == 1 ) && ( typeServ == 5 ) || ( typeVisit == 2 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 5 ) || ( typeVisit == 4 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 5 ) || ( typeVisit == 6 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated3';
      }
      // unknown
      else if ( ( typeVisit == 1 ) && ( typeServ == 6 ) || ( typeVisit == 2 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 6 ) || ( typeVisit == 4 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 6 ) || ( typeVisit == 6 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'Dedicated3';
      }
    }
    
  if ( typeType == 5 ) {
      // shared
      if ( ( typeVisit == 1 ) && ( typeServ == 3 ) || ( typeVisit == 2 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 3 ) || ( typeVisit == 4 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 3 ) || ( typeVisit == 6 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'VPS2';
      }
      // vps
      else if ( ( typeVisit == 1 ) && ( typeServ == 2 ) || ( typeVisit == 2 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 2 ) || ( typeVisit == 3 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 2 ) || ( typeVisit == 6 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS3';
      }
      // dedic
      else if ( ( typeVisit == 1 ) && ( typeServ == 1 ) || ( typeVisit == 2 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 1 ) || ( typeVisit == 4 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 1 ) || ( typeVisit == 6 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      }
      // remote
      else if ( ( typeVisit == 1 ) && ( typeServ == 4 ) || ( typeVisit == 2 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Game1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 4 ) || ( typeVisit == 4 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Game2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 4 ) || ( typeVisit == 6 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Game3';
      }
      // cluster
      else if ( ( typeVisit == 1 ) && ( typeServ == 5 ) || ( typeVisit == 2 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 5 ) || ( typeVisit == 4 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 5 ) || ( typeVisit == 6 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated3';
      }
      // unknown
      else if ( ( typeVisit == 1 ) && ( typeServ == 6 ) || ( typeVisit == 2 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 6 ) || ( typeVisit == 4 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 6 ) || ( typeVisit == 6 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS2';
      }
    }
    
  if ( typeType == 6 ) {
      // shared
      if ( ( typeVisit == 1 ) && ( typeServ == 3 ) || ( typeVisit == 2 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 3 ) || ( typeVisit == 4 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 3 ) || ( typeVisit == 6 ) && ( typeServ == 3 ) ) {
        choosedPackage = 'VPS2';
      }
      // vps
      else if ( ( typeVisit == 1 ) && ( typeServ == 2 ) || ( typeVisit == 2 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 2 ) || ( typeVisit == 3 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 2 ) || ( typeVisit == 6 ) && ( typeServ == 2 ) ) {
        choosedPackage = 'VPS3';
      }
      // dedic
      else if ( ( typeVisit == 1 ) && ( typeServ == 1 ) || ( typeVisit == 2 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 1 ) || ( typeVisit == 4 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 1 ) || ( typeVisit == 6 ) && ( typeServ == 1 ) ) {
        choosedPackage = 'Dedicated2';
      }
      // remote
      else if ( ( typeVisit == 1 ) && ( typeServ == 4 ) || ( typeVisit == 2 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel2';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 4 ) || ( typeVisit == 4 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 4 ) || ( typeVisit == 6 ) && ( typeServ == 4 ) ) {
        choosedPackage = 'Tunnel3';
      }
      // cluster
      else if ( ( typeVisit == 1 ) && ( typeServ == 5 ) || ( typeVisit == 2 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated1';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 5 ) || ( typeVisit == 4 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 5 ) || ( typeVisit == 6 ) && ( typeServ == 5 ) ) {
        choosedPackage = 'Dedicated3';
      }
      // unknown
      else if ( ( typeVisit == 1 ) && ( typeServ == 6 ) || ( typeVisit == 2 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 3 ) && ( typeServ == 6 ) || ( typeVisit == 4 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS2';
      } else if ( ( typeVisit == 5 ) && ( typeServ == 6 ) || ( typeVisit == 6 ) && ( typeServ == 6 ) ) {
        choosedPackage = 'VPS3';
      }
    }