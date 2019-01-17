import { ChartConfig } from "Constants/chart-config";

// New clients
export const newClients = {
   title: 'message.newClients',
   value: '35,455',
   data: [12, 10, 4, 15, 16, 10, 20, 12],
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
   chartColor: ChartConfig.color.primary
}

// Recuring clients
export const recurringClients = {
   title: 'message.recurringClients',
   value: '12,110',
   data: [10, 6, 10, 3, 15, 10, 15, 16],
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
   chartColor: ChartConfig.color.info
}

// Bounce Rate
export const bounceRates = {
   title: 'message.bounceRate',
   value: '8,855',
   data: [12, 12, 12, 18, 8, 17, 8, 12],
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
   chartColor: ChartConfig.color.danger
}

// Page Views
export const pageViews = {
   title: 'message.pageViews',
   value: '9,123',
   data: [10, 6, 10, 3, 15, 10, 15, 16],
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
   chartColor: ChartConfig.color.warning
}

// news letter campaign data
export const newsLetterCampaignData = {
   label1: 'Data 1',
   label2: 'Data 2',
   labels: [
      'Jan',
      'Feb',
      'Mar',
      'Apr',
      'May',
      'Jun',
      'Jul',
      'Aug',
      'Sep',
      'Oct',
      'Nov',
      'Dec'
   ],
   data1: [45, 42, 51, 19, 50, 30, 22, 20, 45, 35, 40, 37],
   data2: [32, 28, 40, 38, 32, 42, 39, 15, 9, 17, 20, 41]
}

// news letter campaign data
export const newsLetterCampaignData2 = {
   data1: [19, 21, 18, 20, 23, 16, 18, 30],
   data2: [10, 8, 14, 11, 10, 12, 10, 0]
}

// news letter campaign data for news dashboard
export const newsLetterCampaignData3 = {
   label1: 'Campaign 1',
   label2: 'Campaign 2',
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
   data1: [50, 45, 22, 18, 25, 5, 35, 20, 45, 22, 30, 70, 40],
   data2: [40, 30, 60, 30, 35, 50, 10, 30, 25, 28, 55, 65, 80]
}

// earned Today
export const earnedToday = {
   color: ChartConfig.color.primary,
   label: 'Earn',
   data: [75, 60, 50, 35, 90, 35, 75, 20, 10, 20, 40, 5, 30, 75, 40, 90, 35, 20, 40, 30, 50, 35, 20, 75],
   labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24']
}

// items sold
export const itemsSold = {
   color: ChartConfig.color.info,
   label: 'Sold',
   data: [75, 60, 50, 35, 90, 35, 75, 20, 10, 20, 40, 5, 30, 75, 40, 90, 35, 20, 40, 30, 50, 35, 20, 75],
   labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24']
}

// sales and earning
export const salesAndEarning = {
   data: [70,55,80,50,60,75,40,55,45,50,80,90,30],
   labels: ['1', '2', '3', '4', '5', '6', '7','8','9','10','11','12'],
   lineTension: 0,
   color: ChartConfig.color.primary
}

// total earning
export const totalEarnings = {
   data: [15, 30, 10, 25, 10, 35],
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', "June"],
   borderColor: ChartConfig.color.danger,
   lineTension: 0.5
}

// net profit
export const netProfit = {
   data: [15, 35 , 10 , 25 , 5 , 35],
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', "June"],
   borderColor: ChartConfig.color.info,
   lineTension: 0.5
}

// total expenses
export const totalExpences = {
   data: [30, 10, 25, 14, 35, 35],
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', "June"],
   borderColor: ChartConfig.color.success,
   lineTension: 0.5
}

// online revenue
export const onlineRevenue = {
   data: [5, 25, 10, 35, 15, 25],
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', "June"],
   borderColor: ChartConfig.color.warning,
   lineTension: 0.5
}

// ad campaign perfomance data
export const adCampaignPerfomanceData = {
   labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
   lineChartData: {
      label: 'Sales',
      data: [60, 45, 55, 75, 40 , 55 , 45 , 50, 40, 50, 30, 50],
      color: ChartConfig.color.info
   },
   barChartData: {
      label: 'Views',
      data: [80, 55, 80, 75, 50, 50, 40, 50, 50, 50, 70, 50,10],
      color: ChartConfig.lineChartAxesColor
   },
   barChartData2: {
      label: 'Earned',
      data: [70, 45, 70, 65, 40, 40, 30, 40, 40, 40, 60, 40,10],
      color: ChartConfig.color.primary
   }
}

// profit share
export const profitShare = {
   labels: ['Support Tickets', 'Business Events', 'Others'],
   data: [300, 50, 20],
   backgroundColor: [
      ChartConfig.color.primary,
      ChartConfig.color.success,
      ChartConfig.color.warning
   ]
}

// devices share
export const devicesShare = {
   labels: ['Website', 'iOS Devices', 'Android Devices'],
   data: [300, 50, 20],
   backgroundColor: [
      ChartConfig.color.primary,
      ChartConfig.color.success,
      ChartConfig.color.warning
   ]
}

// subscribers
export const subscribers = {
   labels: ['Website', 'iOS Devices', 'Android Devices'],
   data: [280, 30, 60],
   backgroundColor: [
      ChartConfig.color.primary,
      ChartConfig.color.success,
      ChartConfig.color.warning
   ]
}
